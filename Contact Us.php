<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>

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

    footer {
      text-align: center;
      padding: 20px;
      background-color: #003087;
      color: white;
      margin-top: 30px;
    }

    footer img {
      width: 40px;
      vertical-align: middle;
      margin-bottom: 10px;
    }

    .footer-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .footer-info {
      margin-top: 10px;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    form {
      background-color: white;
      padding: 30px;
      margin: 0 auto;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
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
            <li><a href="Login.php">Login</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="Contact Us.php"class="active">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <h2>Contact Us</h2>
        <p>If you have any questions or feedback about the PayPal redesign project, feel free to reach out:</p>
        <form id="contactForm" method="POST" action="contact_process.php">

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
        <p id="formMessage" style="margin-top: 15px; color: green; font-weight: bold;"></p>
    </main>

    <footer>
         <?php include('footer.php'); ?>
    </footer>

   
</body>
</html>
