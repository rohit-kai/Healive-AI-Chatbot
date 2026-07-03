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

// Contact Form Submission Logic (Merged)
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


// Book Appointment Logic
if (isset($_POST['Book'])) {
    // Retrieve form data
    $AppoID = $mysqli->real_escape_string($_POST['AppoID']);
    $Date = $mysqli->real_escape_string($_POST['Date']);
    $Time = $mysqli->real_escape_string($_POST['Time']);
    
    // Validate form data
    if (empty($AppoID)) {
        array_push($errors, "Appointment ID is required");
    }
    if (empty($Date)) {
        array_push($errors, "Date is required");
    }
    if (empty($Time)) {
        array_push($errors, "Time is required");
    }

    // Handle file upload
    if (isset($_FILES['medical_report']) && $_FILES['medical_report']['error'] == 0) {
        $fileTmpPath = $_FILES['medical_report']['tmp_name'];
        $fileName = $_FILES['medical_report']['name'];
        $fileSize = $_FILES['medical_report']['size'];
        $fileType = $_FILES['medical_report']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Set the upload directory
        $uploadFileDir = '../../uploads/';
        $destFilePath = $uploadFileDir . $fileName;

        // Check if the file extension is allowed (pdf, jpg, jpeg, png)
        $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png'];
        if (in_array($fileExtension, $allowedExtensions)) {
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destFilePath)) {
                // Insert data into the database
                $query = "INSERT INTO bookapp (Date, Time, patientID, docID, symptoms, medical_report) 
                          VALUES ('$Date', '$Time', '$patientID', '$docID', '$symptoms', '$destFilePath')";
                
                if (mysqli_query($mysqli, $query)) {
                    echo "Appointment successfully booked!";
                } else {
                    echo "Error booking appointment: " . mysqli_error($mysqli);
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "File type not allowed.";
        }
    } else {
        echo "Error in file upload.";
    }

    // Check for existing appointments
    $existingAppointmentQuery = "SELECT * FROM bookapp WHERE Date = '$Date' AND Time = '$Time'";
    $existingAppointmentResult = $mysqli->query($existingAppointmentQuery);

    if ($existingAppointmentResult && $existingAppointmentResult->num_rows > 0) {
        // If there are existing appointments, display an error message
        echo "<script>alert('Booking for the same date and time is not allowed')</script>";
    } else {
        // Retrieve additional data from the form
        $docID = $mysqli->real_escape_string($_POST['docID']);
        $userprofile = $_SESSION['UserID']; // Assuming this holds the user's ID

        // Construct and execute the SQL query for booking
        $sql = "INSERT INTO bookapp (AppoID, Date, Time, patientID, docID) VALUES ('$AppoID', '$Date', '$Time', '$userprofile', '$docID')";
        $result = $mysqli->query($sql);

        // Check if the query executed successfully
        if ($result) {
            // Fetch the doctor's name from the database based on the selected docID
            $queryDoctor = "SELECT DoctorName FROM doctor WHERE DoctorID='$docID'";
            $resultDoctor = $mysqli->query($queryDoctor);
            $doctorName = "";
            if ($resultDoctor && $resultDoctor->num_rows > 0) {
                $doctorData = $resultDoctor->fetch_assoc();
                $doctorName = $doctorData['DoctorName'];
            }

            // Appointment confirmation message
            echo "<script>";
            echo "alert('Appointment booked successfully!\\nDate: $Date\\nTime: $Time\\nDoctor: $doctorName');";
            echo "window.location.href = 'book.php';";
            echo "</script>";
            exit;
        } else {
            array_push($errors, "Failed to book appointment");
        }
    }
}
?>
