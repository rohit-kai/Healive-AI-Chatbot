<?php
// Define database connection parameters
$host = 'localhost';  // Database host (e.g., localhost or your server's address)
$username = 'root';   // Database username (change it according to your setup)
$password = '';       // Database password (change it according to your setup)
$dbname = 'registration';  // Replace with your actual database name

// Create a new connection to the MySQL database using MySQLi
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check the connection for errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);  // Exit if connection fails
} else {
    // Optional: echo a success message (for testing purposes)
    // echo "Connected successfully to the database";
}
?>
