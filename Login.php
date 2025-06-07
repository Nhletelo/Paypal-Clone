<?php
// Start the session
session_start();

// Database connection
$host = "localhost";
$user = "root"; 
$pass = "";     
$dbname = "paypal_redesign"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_email"] = $user["email"];
            header("Location: Services.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
      scroll-behavior: smooth;
    }

    header {
      background-color: #003087;
      color: white;
      padding: 20px 0;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem;
    }

    header img {
      width: 48px;
      height: auto;
    }

    .nav-menu {
      display: flex;
      justify-content: center;
      list-style: none;
      background-color: #005ea6;
      width: 100%;
      padding: 0;
      margin-top: 10px;
    }

    .nav-menu li {
      margin: 0 15px;
    }

    .nav-menu a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 10px;
      display: inline-block;
    }

    .nav-menu a.active,
    .nav-menu a:hover {
      background-color: #ffc439;
      color: #003087;
      border-radius: 5px;
    }

    main {
      padding: 40px 20px;
      text-align: center;
    }

    .welcome h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
      color: #003087;
    }

    .welcome p {
      max-width: 700px;
      margin: 0 auto 30px;
      font-size: 1.1rem;
    }

    .hero-image {
      max-width: 200px;
      margin-top: 20px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .about {
      margin-top: 60px;
      padding: 30px;
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 10px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .about h3 {
      color: #003087;
      font-size: 1.6rem;
      margin-bottom: 15px;
    }

    .about p {
      font-size: 1.05rem;
      line-height: 1.7;
    }

    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    form {
      background-color: white;
      padding: 30px;
      margin: 0 auto;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    button {
      background-color: #003087;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #005ea6;
    }
  </style>
</head>

<body>
    <header>
        <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal Logo">
        <h1>PayPal Redesign Project</h1>
    </header>

    <nav>
        <ul class="nav-menu">
            <li><a href="index.php">Homepage</a></li>
            <li><a href="Sign Up.php">Sign Up</a></li>
            <li><a href="Login.php" class="active">Login</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
        </ul>
    </nav>

    <main>
    <h2>Login</h2>

    <?php if (!empty($error)): ?>
      <div class="error-msg"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="Login.php">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </main>

  <footer>
    <?php include('footer.php'); ?>
  </footer>
</body>
</html>