<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home Page</title>

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
  </style>
</head>

<body>
  <header>
    <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal Logo">
    <h1>PayPal Redesign Project</h1>
  </header>
  <nav>
    <ul class="nav-menu">
      <li><a href="index.php" class="active">Homepage</a></li>
      <li><a href="Sign Up.php">Sign Up</a></li>
      <li><a href="Login.php">Login</a></li>
      <li><a href="Services.php">Services</a></li>
      <li><a href="Contact Us.php">Contact Us</a></li>
    </ul>
  </nav>

  <main>
    <section class="welcome">
      <h2>Welcome to the Future of PayPal</h2>
      <p>This project aims to <strong>improve user experience</strong>, <strong>enhance operations</strong>, and <strong>grow PayPal's commercial value</strong> through innovation and simplicity.</p>
      <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal Icon" class="hero-image">
    </section>

    <section class="about" id="about">
      <h3>About Us</h3>
      <p>PayPal has been helping people and businesses send, spend, and receive money for over 25 years. We create simple, secure, and personalized ways to shop and do business online. Today, PayPal works in nearly 200 countries, making it easier for everyone to be part of the global economy.</p>
      <p>To learn more, visit <a href="https://about.pypl.com/" target="_blank">about.pypl.com</a> and <a href="https://investor.pypl.com/" target="_blank">investor.pypl.com</a>.</p>
    </section>
    

  </main>

  <footer>
      <?php include('footer.php'); ?>
  </footer>
</body>
</html>
