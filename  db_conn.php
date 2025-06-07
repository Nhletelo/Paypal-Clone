<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paypal_redesign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Optional: Set character set to utf8mb4
$conn->set_charset("utf8mb4");
?>

