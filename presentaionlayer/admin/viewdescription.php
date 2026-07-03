<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style-css.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header class="header" style="width:100%;">
	<a href="#" class="logo" style="margin-left: 100px;"><img src="image/Logo.png" alt="" height="140px"></i></a>
	<nav class="navbar">
		<a href="index3.php">Add/Delete Doctor</a>
		<a href="viewdoctor.php">View Doctors</a>
		<a href=" viewpatients.php">View Patients</a>
		<a href="viewappointments.php">View Appointments</a>
		<a href="searchdonoradmin.php">Search Donor</a>
		<a href="viewdescription.php">Description</a>
		<a href="viewfeedback.php">Feedback</a>
		<a href="viewmessage.php">Dev Messages</a>
		<a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>

<body>
<h1 class="heading2">View <span></span>Description</h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Patient ID</th>
		<th>Description Name</th>
		<th>Treatment</th>
		<th>Note</th>
		

		</tr>

		<?php $sql3="SELECT  * FROM  description " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["descID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["descName"]."</td><td>".$row3["treatment"]."</td><td>".$row3['note']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>