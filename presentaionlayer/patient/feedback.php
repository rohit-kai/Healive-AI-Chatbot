<?php
// Include the database connection file
include '../../datalayer/bookserver.php';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Feedback</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<header class="header" style="width:100%;">
    <a href="#" class="logo" style="margin-left: 100px;"><img src="image/logo.png" alt="" height="140px"></i></a>
    <nav class="navbar">
        <a href="index.php">MyInfo</a>
        <a href="book.php">Book Appointment</a>
        <a href="view.php">View Appointment</a>
        <a href="cancel.php">Cancel Booking</a>
        <a href="searchdoctor.php">Search Doctor</a>
        <a href="donate.php">Donate Organ</a>
        <a href="searchdonor.php">Search Donor</a>
        <a href="feedback.php">Feedback</a>
        <a href="hostfind/index.html">Nearest Hospital</a>
        <a href="../../applicationlayer/Doctorpatient.php">Logout</a>
    </nav>
</header>
<body>
    <h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 180px;">Patient <span style="color: var(--black);">Feedback</span></h1>

    <form method="post" action="feedback.php" style="position: absolute; right: 250px;" enctype="multipart/form-data">
        <?php include ('../../datalayer/errors.php'); ?>

        <!-- Patient ID Input -->
        <div class="input-group" style="margin-bottom: 5px;width: 100%;">
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Patient ID</label>
            <input type="text" name="pID" required style="height: 50px;width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
        </div>

        <!-- Feedback Text Area -->
        <div class="input-group" style="margin-bottom: 5px;width: 100%;">
            <label style="display: inline-block;text-align: left;font-size: 1.6rem;">Your Feedback</label>
            <textarea name="feedback" rows="6" required style="width: calc(100% - 22px);padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;"></textarea>
        </div>

        <div class="input-group">
            <button type="submit" name="SubmitFeedback" class="btn" style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: black;border: none;border-radius: 5px;cursor: pointer;">Submit</button>
        </div>
    </form>
</body>
<script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2025/01/13/04/20250113043849-3J5030H4.js"></script>
</html>
