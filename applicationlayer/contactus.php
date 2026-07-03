<?php
// session_start();
include '../datalayer/bookserver.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .contact-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
    }

    .contact-info {
      margin-left: 50px;
      width: 35%;
    }

    .contact-info h3 {
      margin-bottom: 10px;
    }

    .contact-info p {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .contact-info a {
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }

    .developer-section {
      margin-top: 50px;
      text-align: center;
    }

    .developer-section h2 {
      margin-bottom: 30px;
    }

    .developer-cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .developer-card {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 250px;
    }

    .developer-card img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .developer-card h3 {
      margin: 10px 0;
    }

    .developer-card p {
      font-size: 1rem;
      color: #666;
    }

    .contact-form {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      width: 40%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .contact-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .contact-form button {
      width: 100%;
      padding: 10px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #555;
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>Contact Us</h1>
    <p>Feel free to reach out to us with any questions or concerns!</p>
  </div>

  <!-- Developer Section -->
  <div class="developer-section">
    <h2>Meet the Developers</h2>
    <div class="developer-cards">
      <!-- Developer 1 -->
      <div class="developer-card">
        <img src="image/pra.jpg" alt="Developer 1">
        <h3>Pranesh Howale</h3>
        <p>Database Developer</p>
        <p> Vasantraodada Patil Institute of Management Studies & Research - [VPIMSR], Sangli</p>
      </div>

      <!-- Developer 2 -->
      <div class="developer-card">
        <img src="image/shre.jpg" alt="Developer 2">
        <h3>Shreyas Mali</h3>
        <p>Frontend Developer</p>
        <p> Vasantraodada Patil Institute of Management Studies & Research - [VPIMSR], Sangli</p>
      </div>

      <!-- Developer 3 -->
      <div class="developer-card">
        <img src="image/kai.jpg" alt="Developer 4">
        <h3>Rohit Dongale</h3>
        <p>Backend Developer</p>
        <p> Vasantraodada Patil Institute of Management Studies & Research - [VPIMSR], Sangli</p>
      </div>
    </div>
  </div>

  <div class="contact-container">
    <div class="contact-info">
      <h3>Contact Information</h3>
      <p><strong>Email:</strong> <a href="mailto:support@example.com">supppppppppppppppport@example.com</a></p>
      <p><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
      <p><strong>Address:</strong> Vasantraodada Patil Institute of Management Studies & Research - [VPIMSR], Sangli</p>
    </div>

    <div class="contact-form">
      <h2>Get In Touch</h2>
      <!-- Updated Form Action to submit data to the server.php -->
      <form action="contactus.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit" name="submit_contact">Send Message</button>
      </form>
    </div>
  </div>
</body>

</html>
