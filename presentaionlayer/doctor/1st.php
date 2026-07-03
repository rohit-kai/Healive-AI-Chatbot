<?php include('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Description</title>
    <link rel="stylesheet" type="text/css" href="style00.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo" style="margin-left: 100px;"><img src="image/logo.png" alt="" height="140px"></a>
    <nav class="navbar">
        <a href="index2.php">MyInfo</a>
        <a href="doctorapp.php">My Appointments</a>
        <a href="doctorapp.php">My Appointments</a>
        <a href="searchpatient.php">Send Report</a>
        <a href="1st.php">Discription</a>
        <a href="searchdonor.php">search Donor</a>
        <a href="../../applicationlayer/Doctorpatient.php">Logout</a>
    </nav>
</header>
<section>
    <div class="formheader">
        <h2>Patient Description</h2>
    </div>

    <?php
    // Display the message if any
    if (isset($message)) {
        echo "<div class='message'>$message</div>";
    }
    ?>

    <form method="post" action="1st.php">
        <!-- Description Name Field -->
        <div class="input-group">
            <label>Description Name</label>
            <input type="text" name="descName" required>
        </div>

        <!-- Note Field -->
        <div class="input-group">
            <label>Note</label>
            <textarea name="note" required></textarea>
        </div>

        <!-- Treatment Field -->
        <div class="input-group">
            <label>Treatment</label>
            <textarea name="treatment" required></textarea>
        </div>

        <!-- Patient ID Field -->
        <div class="input-group">
            <label>Patient ID</label>
            <input type="text" name="patientID" required>
        </div>

        <!-- Doctor ID Field -->
        <div class="input-group">
            <label>Doctor ID</label>
            <input type="text" name="doctorIDdesc" required>
        </div>

        <!-- Submit Button -->
        <div class="input-group">
            <button type="submit" name="submit_description" class="btn">Submit Description</button>
        </div>

        <p>
            Return to your <a href="index2.php">Dashboard</a>
        </p>
    </form>
</section>
<img id="gif" src="image/kai.gif" alt="">
</body>
</html>
