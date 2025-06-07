<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paypal_redesign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $_SESSION['formMessage'] = "❌ Database connection failed.";
    header("Location: Contact Us.php");
    exit();
}

// Get and sanitize input
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    $_SESSION['formMessage'] = "❌ Please fill in all fields.";
    header("Location: Contact Us.php");
    exit();
}

// Insert into database using prepared statement
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    $_SESSION['formMessage'] = "✅ Thank you! Your message has been received.";
} else {
    $_SESSION['formMessage'] = "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: Contact Us.php");
exit();
?>
