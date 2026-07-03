<?php
// Start the session only if it hasn't started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$errors = array();

// Create a connection to the database
$mysqli = new mysqli("localhost", "root", "", "registration");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserID']);
    unset($_SESSION['DoctorID']);
    unset($_SESSION['AdminID']);
    header('location: login.php');
    exit;
}

// Registration functionality
if (isset($_POST['Register'])) {
    $Username = $mysqli->real_escape_string($_POST['Name']);
    $Address = $mysqli->real_escape_string($_POST['Address']);
    $ContactNumber = $mysqli->real_escape_string($_POST['ContactNumber']);
    $Email = $mysqli->real_escape_string($_POST['Email']);
    $Password = $mysqli->real_escape_string($_POST['password']);
    $bloodtype = $mysqli->real_escape_string($_POST['bloodtype']);
    $Date = $mysqli->real_escape_string($_POST['Date']);

    if (empty($Username) || empty($Address) || empty($ContactNumber) || empty($Email) || empty($Password) || empty($bloodtype)) {
        array_push($errors, "All fields are required");
    }

    if (count($errors) == 0) {
        $CopyPassword = $Password;
        $Password = md5($Password);
        $sql = "INSERT INTO patients (Name, Address, ContactNumber, Email, Password, Bloodtype, Date) 
                VALUES ('$Username','$Address','$ContactNumber','$Email','$Password','$bloodtype','$Date')";

        if ($mysqli->query($sql)) {
            $lastUserID = $mysqli->insert_id;  // Get the auto-incremented UserID
            $_SESSION['UserID'] = $lastUserID;
            $_SESSION['success'] = "You are now logged in";
            echo "<script>alert(`Please Make Sure To Save Your UserId and Password.\nUser ID: $lastUserID, Password: $CopyPassword`);</script>";
        } else {
            printf("%d Row inserted.\n", $mysqli->affected_rows);
        }
    }
}

// Login functionality for patients
if (isset($_POST['Login'])) {
    $UserID = $mysqli->real_escape_string($_POST['UserID']);
    $Password = $mysqli->real_escape_string($_POST['password']);

    if (empty($UserID) || empty($Password)) {
        array_push($errors, "UserID and Password are required");
    }

    if (count($errors) == 0) {
        $Password = md5($Password);
        $query = "SELECT * FROM patients WHERE UserID=('$UserID') AND Password=('$Password')";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) == 1) {
            // Destroy the previous session (if any)
            session_destroy();

            // Start a new session
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // Regenerate the session ID
            session_regenerate_id(true);

            // Set the new session variables
            $_SESSION['UserID'] = $UserID;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../presentaionlayer/patient/index.php');
            exit;
        } else {
            array_push($errors, "The ID/Password is not correct");
        }
    }
}

// Fetch patient profile information
$userprofile = isset($_SESSION['UserID']) ? $_SESSION['UserID'] : null;
$query = "SELECT * FROM patients WHERE UserID=('$userprofile')";
$result = mysqli_query($mysqli, $query);
$col = mysqli_fetch_assoc($result);

// Doctor Login functionality
if (isset($_POST['Login2'])) {
    $DoctorID2 = $mysqli->real_escape_string($_POST['doctorID']);
    $DoctorPassword2 = $mysqli->real_escape_string($_POST['doctorpassword']);

    if (empty($DoctorID2)) {
        array_push($errors, "Doctor ID is required");
    }
    if (empty($DoctorPassword2)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $queryD = "SELECT * FROM doctor WHERE DoctorID=('$DoctorID2') AND password=('$DoctorPassword2')";
        $resultD = mysqli_query($mysqli, $queryD);
        if (mysqli_num_rows($resultD) == 1) {
            $_SESSION['DoctorID'] = $DoctorID2;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../presentaionlayer/doctor/index2.php');
        } else {
            array_push($errors, "The ID/Password is not correct");
        }
    }
}

// Fetch doctor profile information
$doctorprofile = isset($_SESSION['DoctorID']) ? $_SESSION['DoctorID'] : null;
$querydoctor = "SELECT * FROM doctor WHERE DoctorID=('$doctorprofile')";
$resultdoctor = mysqli_query($mysqli, $querydoctor);
$colD = mysqli_fetch_assoc($resultdoctor);

// Admin Login functionality
if (isset($_POST['Login3'])) {
    $adminID = $mysqli->real_escape_string($_POST['adminID']);
    $adminpassword = $mysqli->real_escape_string($_POST['adminpassword']);

    if (empty($adminID)) {
        array_push($errors, "Admin ID is required");
    }
    if (empty($adminpassword)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $queryA = "SELECT * FROM admin WHERE AdminID=('$adminID') AND adminpassword=('$adminpassword')";
        $resultA = mysqli_query($mysqli, $queryA);
        if (mysqli_num_rows($resultA) == 1) {
            $_SESSION['AdminID'] = $adminID;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../presentaionlayer/admin/index3.php');
        } else {
            array_push($errors, "The ID/Password is not correct");
        }
    }
}

// Handling treatment history for patients
if (isset($_POST['treatmentHistory'])) {
    header('../presentaionlayer/patient/myinfo.php');
    ?>
    <table class="table2" style="margin-top: -10px">
        <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
        <tr>
            <th>DoctorID</th>
            <th>DoctorName</th>
            <th>Treatment</th>
            <th>Doctor's Note</th>
        </tr> 
    <?php
    $sql11 = "SELECT * FROM description, doctor WHERE descID=('$userprofile') AND doctorIDdesc=DoctorID";
    $result11 = $mysqli->query($sql11);
    if (mysqli_num_rows($result11) >= 1) {
        while ($row11 = $result11->fetch_assoc()) {
            echo "<tr><td>" . $row11['DoctorID'] . "</td><td>" . $row11['Doctorname'] . "</td><td>" . $row11['treatment'] . "</td><td>" . $row11['Note'] . "</td></tr>";
        }
        echo "</table>";
    }
}
?>
