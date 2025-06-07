<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>

  <style>
    /* General Reset */
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

    main h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
      color: #003087;
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
    input[type="password"],
    input[type="text"] {
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
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
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
            <li><a href="Sign Up.php" class="active">Sign Up</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <h2>Sign Up</h2>
        <form action="signup_process.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Sign Up</button>
</form>


    </main>

    <footer>
      <?php include('footer.php'); ?>
    </footer>
