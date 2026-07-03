<?php
session_start();
include '../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Register</title>
	<link rel="stylesheet" type="text/css" href="style00.css">
</head>
<body>
<header class="header">
<a href="#" class="logo" style="margin-left: 100px;"><img src="image/logo.png" alt="" height="140px"></i></a>
</header>
<section>
	<div class="formheader">
		<h2>Description</h2>
	</div>

	<form method="post" action="1st.php" enctype="multipart/form-data">

		

		


		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name" >


		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address">

		</div>

		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="ContactNumber">


		</div>


		<div class="input-group">
			<label>Email address</label>
			<input type="text" name="Email">

		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">

		</div>

		<div class="input-group">
			<label>Blood type</label>
			<input type="text" name="bloodtype">

		</div>
	

		<div class="input-group">
			<button type="submit" name="Register" class="btn">Register</button>
		</div>

		<p>
			Already a member? <a href="login.php">Sign in </a>
		</p>
		




	</form>

</section>
<img id="gif" src="image/Register.gif" alt="">
</body>
</html>