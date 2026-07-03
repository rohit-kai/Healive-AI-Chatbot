<?php  
session_start(); // Start the session if not already started

$errors = array();
include('server.php'); // Assuming this is where database connection and other configurations are handled

// Database connection
$mysqli = new mysqli("localhost", "root", "", "registration");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Description Submission Logic
if (isset($_POST['submit_description'])) {
    // Collect data from the form
    $descName = $mysqli->real_escape_string($_POST['descName']);
    $note = $mysqli->real_escape_string($_POST['note']);
    $treatment = $mysqli->real_escape_string($_POST['treatment']);
    $patientID = $mysqli->real_escape_string($_POST['patientID']);
    $doctorIDdesc = $mysqli->real_escape_string($_POST['doctorIDdesc']);

    // Prepare the SQL query to insert the data into the database
    $sql = "INSERT INTO description (descName, note, treatment, patientID, doctorIDdesc) 
            VALUES ('$descName', '$note', '$treatment', '$patientID', '$doctorIDdesc')";

    // Execute the query
    if ($mysqli->query($sql) === TRUE) {
        // Success message
        $message = "Description submitted successfully!";
    } else {
        // Error message
        $message = "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Feedback Submission Logic
if (isset($_POST['SubmitFeedback'])) {
    $patientID = $mysqli->real_escape_string($_POST['pID']);
    $feedback = $mysqli->real_escape_string($_POST['feedback']);

    // Insert feedback into the database
    $sql = "INSERT INTO feedback (pID, feedback) VALUES ('$patientID', '$feedback')";
    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error submitting feedback: " . $mysqli->error . "');</script>";
    }
}

// Contact Form Submission Logic
if (isset($_POST['submit_contact'])) {
    // Collect data from the contact form
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $message = $mysqli->real_escape_string($_POST['message']);

    // Prepare the SQL query to insert the data into the messages table
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the query
    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Error submitting message: " . $mysqli->error . "');</script>";
    }
}

// Appointment Booking Logic
if (isset($_POST['Book'])) {
    // Retrieve form data
    $Date = $mysqli->real_escape_string($_POST['Date']);
    $Time = $mysqli->real_escape_string($_POST['Time']);
    $symptoms = $mysqli->real_escape_string($_POST['symptoms']); // Add symptoms
    $docID = $mysqli->real_escape_string($_POST['docID']);
    $userprofile = $_SESSION['UserID']; // Assuming user ID is stored in the session
    
    // Validate form data
    if (empty($Date)) {
        array_push($errors, "Date is required");
    }
    if (empty($Time)) {
        array_push($errors, "Time is required");
    }
    if (empty($symptoms)) {
        array_push($errors, "Symptoms are required");
    }

    // Handle file upload for the medical report
    if (isset($_FILES['medical_report']) && $_FILES['medical_report']['error'] == 0) {
        $fileTmpPath = $_FILES['medical_report']['tmp_name'];
        $fileName = $_FILES['medical_report']['name'];
        $fileSize = $_FILES['medical_report']['size'];
        $fileType = $_FILES['medical_report']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Set the upload directory
        $uploadFileDir = '../../uploads/'; // Directory to store the files
        $destFilePath = $uploadFileDir . $fileName;

        // Allowed file types
        $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png'];

        // Check if the file type is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destFilePath)) {
                // Insert data into the database, including the file path
                $query = "INSERT INTO bookapp (Date, Time, patientID, docID, symptoms, medical_report) 
                          VALUES ('$Date', '$Time', '$userprofile', '$docID', '$symptoms', '$destFilePath')";

                if ($mysqli->query($query)) {
                    echo "<script>alert('Appointment successfully booked!');</script>";
                } else {
                    echo "<script>alert('Book appointment successfully: " . $mysqli->error . "');</script>";
                }
            } else {
                echo "<script>alert('Book appointment successfully:');</script>";
            }
        } else {
            echo "<script>alert('File type not allowed. Please upload a PDF, JPG, JPEG, or PNG file.');</script>";
        }
    } else {
        echo "<script>alert('Error in file upload.');</script>";
    }

    // Check if the appointment already exists for the selected date and time
    $existingAppointmentQuery = "SELECT * FROM bookapp WHERE Date = '$Date' AND Time = '$Time'";
    $existingAppointmentResult = $mysqli->query($existingAppointmentQuery);

    if ($existingAppointmentResult && $existingAppointmentResult->num_rows > 0) {
        // If there's an existing appointment, show an error
        echo "<script>alert('Booking for the same date and time is not allowed')</script>";
    } else {
        // Insert appointment details into the database
        $sql = "INSERT INTO bookapp (Date, Time, patientID, docID, symptoms, medical_report) 
                VALUES ('$Date', '$Time', '$userprofile', '$docID', '$symptoms', '$destFilePath')";
        $result = $mysqli->query($sql);

        if ($result) {
            // Fetch the doctor's name
            $queryDoctor = "SELECT DoctorName FROM doctor WHERE DoctorID='$docID'";
            $resultDoctor = $mysqli->query($queryDoctor);
            $doctorName = "";
            if ($resultDoctor && $resultDoctor->num_rows > 0) {
                $doctorData = $resultDoctor->fetch_assoc();
                $doctorName = $doctorData['DoctorName'];
            }

            // Show a success message and redirect
            echo "<script>";
            echo "alert('Appointment booked successfully!\\nDate: $Date\\nTime: $Time\\nDoctor: $doctorName');";
            echo "window.location.href = 'book.php';";
            echo "</script>";
        } else {
            array_push($errors, "Failed to book appointment");
        }
    }
}
?>
