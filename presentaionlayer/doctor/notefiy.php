<?php
// Database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to send email notification (can be extended for SMS or push notifications)
function sendNotificationEmail($userEmail, $message) {
    $subject = "Notification from Doctor System";
    $headers = "From: no-reply@doctorsystem.com";

    if (mail($userEmail, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}

// Function to add notification to the database
function addNotification($userId, $message, $type, $priority, $actionLink, $channel = 'Email') {
    global $conn;
    $dateTimeSent = date('Y-m-d H:i:s');
    $status = "Pending";  // Change status based on delivery status

    $stmt = $conn->prepare("INSERT INTO notifications (User_ID, Message, Type, DateTime_Sent, Status, Priority, Action_Link, Channel)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $userId, $message, $type, $dateTimeSent, $status, $priority, $actionLink, $channel);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to add reminder to the database
function addReminder($userId, $message, $reminderType, $scheduledTime, $repeat = false, $actionLink = '') {
    global $conn;
    $status = "Pending";  // Change status based on reminder status

    $stmt = $conn->prepare("INSERT INTO reminders (User_ID, Message, Reminder_Type, Scheduled_Time, Repeat, Status, Action_Link)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssiis", $userId, $message, $reminderType, $scheduledTime, $repeat, $status, $actionLink);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Example Usage
// Add a notification for a patient about an upcoming appointment
$userId = 1;  // Assuming the user ID is 1
$message = "Your appointment with Dr. Smith is tomorrow at 3 PM.";
$type = "Appointment Reminder";
$priority = "High";
$actionLink = "http://doctorsystem.com/appointments/1";  // Link to view appointment details
$channel = "Email";  // You can also add SMS, Push Notifications, etc.

// Add notification to database
if (addNotification($userId, $message, $type, $priority, $actionLink, $channel)) {
    // Send email notification
    $userEmail = "patient@example.com";  // Replace with actual patient's email
    if (sendNotificationEmail($userEmail, $message)) {
        echo "Notification sent successfully!";
    } else {
        echo "Failed to send email notification.";
    }
} else {
    echo "Failed to add notification to the database.";
}

// Example of adding a reminder (for medication)
$reminderMessage = "Take your blood pressure medication.";
$reminderType = "Medication Reminder";
$scheduledTime = date('Y-m-d H:i:s', strtotime('+1 hour'));  // Schedule for 1 hour later
$repeat = true;  // Set to true for recurring reminders

// Add reminder to the database
if (addReminder($userId, $reminderMessage, $reminderType, $scheduledTime, $repeat)) {
    echo "Reminder added successfully!";
} else {
    echo "Failed to add reminder to the database.";
}

$conn->close();
?>
