<?php 
include '../../datalayer/bookserver.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor</title>
    <link rel="stylesheet"  href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        .view-report-btn {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 10px 20px; /* Padding */
            border: none; /* No border */
            cursor: pointer; /* Pointer cursor on hover */
            border-radius: 5px; /* Rounded corners */
        }
        .view-report-btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<header class="header" style="width:100%;">
    <a href="#" class="logo" style="margin-left: 100px;"><img src="image/logo.png" alt="" height="140px"></i></a>
    <nav class="navbar">
      <a href="index2.php">MyInfo</a>
 <a href="doctorapp.php">My Appointments</a>
			<a href=" searchpatient.php">Send Report</a>
			<a href="1st.php">Discription</a>
			<a href="searchdonor.php">search Donor</a>
			<a href="../../applicationlayer/Doctorpatient.php">Logout</a>
    </nav>
</header>
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 190px;">My <span style="text-transform: uppercase;color: var(--dark);">Appointments</span></h1>

<table class="table2" style="border-collapse: collapse;width: 100%;color: Dark;font-family: monospace;font-size: 20px;text-align: center;margin-top: 50px;">
    <tr style="border:1px solid dark;">
        <th style="background-color: black;color: white;">Appointment ID</th>
        <th style="background-color:  black;color: white;">DATE</th>
        <th style="background-color:  black;color: white;">TIME</th>
        <th style="background-color:  black;color: white;">PatientID</th>
        <th style="background-color:  black;color: white;">PatientName</th>
        <th style="background-color:  black;color: white;">PatientAddress</th>
        <th style="background-color:  black;color: white;">PatientEmail</th>
        <th style="background-color:  black;color: white;">PatientContactNumber</th>
        <th style="background-color:  black;color: white;">BloodGroup</th>
        <th style="background-color:  black;color: white;">Disease Symptoms</th>
        <th style="background-color:  black;color: white;">Previous Medical Report</th>
    </tr>

    <?php 
    $sqldoc = "SELECT * FROM bookapp, patients WHERE docID=('$doctorprofile') AND patientID=UserID";
    $resultdoc = $mysqli->query($sqldoc);
    if (mysqli_num_rows($resultdoc) >= 1) {
        while ($rowdoc = $resultdoc->fetch_assoc()) {
            // Update this path with the correct file location
            $filePath = '.../../doctor/uploads/' . $rowdoc["medical_report"]; // Assuming the file is in the 'uploads' folder

            echo "<tr><td>" . $rowdoc["AppoID"] . "</td><td>" . $rowdoc["Date"] . "</td><td>" . $rowdoc["Time"] . "</td><td>" . $rowdoc["UserID"] . "</td><td>" . $rowdoc['Name'] . "</td><td>" . $rowdoc['Address'] . "</td><td>" . $rowdoc['Email'] . "</td><td>" . $rowdoc["ContactNumber"] . "</td><td>" . $rowdoc["Bloodtype"] . "</td><td>" . $rowdoc["symptoms"] . "</td>";
            
            // Check if the medical report file exists, then show a button
            if (file_exists($filePath)) {
                echo "<td><button class='view-report-btn' onclick='window.open(\"$filePath\", \"_blank\")'>View Report</button></td>";
            } else {
                echo "<td>Report not available</td>";
            }
            
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
</html>
