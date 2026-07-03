<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header class="header" style="width:100%;">
<a href="#" class="logo" style="margin-left: 10px;"><img src="image/logo.png" alt="" height="140px"></i></a>
    <nav class="navbar">
        <a href=" index.php">MyInfo</a>
        <a href=" book.php">Book Appointment</a>
        <a href=" view.php">View Appointment</a>
        <a href="cancel.php">Cancel Booking</a>
        <a href=" searchdoctor.php">Search Doctor</a>
        <a href="donate.php">Donate Organ</a>
        <a href="searchdonor.php">Search Donar</a>
      <a href="feedback.php">Feedback</a>
        <a href="hostfind/index.html">Nearest Hospital</a>
        <a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 190px;">Cancel <span style="text-transform: uppercase;color: var(--black);">Booking</span></h1>
<body>	
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group" style="margin-bottom: 5px;width: 100%; ">
		<label  style="display: inline-block;text-align: left;position:absolute;right:420px;top:300px;font-size: 1.6rem;">Appointment ID</label>
		<input type="text" name="AppoID2" style="height: 50px;width: 200px;padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;position:absolute;right:380px;top:350px;">

	</div>

	<div class="input-group" style="margin-bottom: 5px;width: 100%;">
		<button type="submit" name="cancel" class="btn" class="btn" style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: black;border: none;border-radius: 5px;cursor: pointer;position:absolute;right:430px;top:430px;">Cancel</button>
	</div>
</form>
<img src="image/Cancelbook.gif" alt="" style="position:absolute; left:150px;top:300px;">
</body> 

 
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2025/01/13/04/20250113043849-3J5030H4.js"></script>
      
</html>


