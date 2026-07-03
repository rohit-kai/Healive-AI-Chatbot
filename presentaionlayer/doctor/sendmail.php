<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send'])) {
    // Get the data from the form
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Set up SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.elasticemail.com'; // Your SMTP provider's address
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abcd@gmail.com'; // Replace with your Elastic Email username
        $mail->Password   = 'abcd'; // Replace with your Elastic Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Set the sender's email and name
        $mail->setFrom('ujumakikai8975@gmail.com', 'kai');

        // Add the recipient email address (this is the customer email from the form)
        $mail->addAddress($email);

        // Handle attachments if any
        if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
            // Move the uploaded file to a directory on the server
            $upload_dir = "uploads/";
            $uploaded_file = $upload_dir . $_FILES['attachment']['name'];

            if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploaded_file)) {
                // Attach the file
                $mail->addAttachment($uploaded_file);
            }
        }

        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message); // Convert new lines to <br> tags for HTML email

        // Send the email
        if ($mail->send()) {
            echo '<script>alert("Message Sent to the customer successfully.")</script>';
        } else {
            echo '<script>alert("Message could not be sent. Please try again.")</script>';
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
