<?php
session_start();

// Database connection
$host = "localhost";
$user = "root"; 
$pass = "";     
$dbname = "paypal_redesign"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize and validate input
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$password = $_POST["password"];

if (empty($username) || empty($email) || empty($password)) {
    die("All fields are required.");
}

// Check if username or email already exists
$check = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$check->bind_param("ss", $username, $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    $check->close();
    $conn->close();
    die("Username or Email already registered. <a href='Login.php'>Login here</a>");
}
$check->close();

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into the database
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Registration successful! <a href='Login.php'>Login now</a>";
} else {
    echo "Something went wrong. Please try again.";
}

$stmt->close();
$conn->close();
?>
