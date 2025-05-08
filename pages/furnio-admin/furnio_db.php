<?php
$host = "localhost";
$username = "root";  // your DB username
$password = "";      // your DB password
$database = "furnio_db";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

