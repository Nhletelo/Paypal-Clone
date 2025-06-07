<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services</title>

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

    .plans {
      margin-top: 40px;
    }

    .plans h3 {
      color: #003087;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .plan-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .plan-buttons button {
      background-color: #005ea6;
      color: white;
      border: none;
      padding: 15px 25px;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .plan-buttons button:hover {
      background-color: #ffc439;
      color: #003087;
    }

    /* Card container */
    .card-container {
      max-width: 450px;
      margin: 30px auto 0;
      padding: 25px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: left;
      display: none; /* Hidden by default */
    }

    .card-container.active {
      display: block;
      animation: fadeIn 0.5s ease-in;
    }

    .card-container h4 {
      color: #003087;
      margin-bottom: 15px;
      font-size: 1.4rem;
      text-align: center;
    }

    .card-container label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #333;
    }

    .card-container input,
    .card-container textarea {
      width: 100%;
      padding: 8px 10px;
      margin-bottom: 15px;
      border: 1.5px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
      font-family: inherit;
      resize: vertical;
    }

    .card-container button.submit-btn {
      width: 100%;
      background-color: #005ea6;
      color: white;
      border: none;
      padding: 12px;
      font-size: 1.1rem;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .card-container button.submit-btn:hover {
      background-color: #ffc439;
      color: #003087;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body>
    <header>
        <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal Logo" />
        <h1>PayPal Redesign Project</h1>
    </header>

    <nav>
        <ul class="nav-menu">
            <li><a href="index.php">Homepage</a></li>
            <li><a href="Sign Up.php">Sign Up</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Services.php" class="active">Services</a></li>
            <li><a href="Contact Us.php">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <h2>Our Web Services</h2>
        <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal Services" class="hero-image" />

        <section class="plans">
  <h3>Choose the Right PayPal Plan</h3>
  <div class="plan-buttons">
    <button id="personal-btn">Personal Use</button>
    <button id="business-btn">Business Use</button>
    <button id="enterprise-btn">Enterprise</button>
  </div>

  <!-- Cards for each plan -->
  <div id="personal-card" class="card-container">
    <h4>Send Money - Personal Use</h4>
    <form action="services_submit.php" method="POST">
      <input type="hidden" name="form_type" value="personal" />

      <label for="p-name">Recipient Name</label>
      <input type="text" id="p-name" name="p-name" required />

      <label for="p-email">Recipient Email</label>
      <input type="email" id="p-email" name="p-email" required />

      <label for="p-amount">Amount</label>
      <input type="number" id="p-amount" name="p-amount" min="1" step="0.01" required />

      <button type="submit" class="submit-btn">Send Money</button>
    </form>
  </div>

  <div id="business-card" class="card-container">
    <h4>Receive Payments - Business Use</h4>
    <form action="services_submit.php" method="POST">
      <input type="hidden" name="form_type" value="business" />

      <label for="b-business">Business Name</label>
      <input type="text" id="b-business" name="b-business" required />

      <label for="b-email">Business Email</label>
      <input type="email" id="b-email" name="b-email" required />

      <label for="b-amount">Amount</label>
      <input type="number" id="b-amount" name="b-amount" min="1" step="0.01" required />

      <label for="b-invoice">Invoice Number</label>
      <input type="text" id="b-invoice" name="b-invoice" />

      <button type="submit" class="submit-btn">Request Payment</button>
    </form>
  </div>

  <div id="enterprise-card" class="card-container">
    <h4>Global Commerce Support - Enterprise</h4>
    <form action="services_submit.php" method="POST">
      <input type="hidden" name="form_type" value="enterprise" />

      <label for="e-company">Company Name</label>
      <input type="text" id="e-company" name="e-company" required />

      <label for="e-contact">Contact Person</label>
      <input type="text" id="e-contact" name="e-contact" required />

      <label for="e-email">Contact Email</label>
      <input type="email" id="e-email" name="e-email" required />

      <label for="e-details">Details / Message</label>
      <textarea id="e-details" name="e-details" rows="4" required></textarea>

      <button type="submit" class="submit-btn">Submit Request</button>
    </form>
  </div>
</section>


    <footer>
        <?php include('footer.php'); ?>
    </footer>

    <script>const personalBtn = document.getElementById('personal-btn');
        const businessBtn = document.getElementById('business-btn');
        const enterpriseBtn = document.getElementById('enterprise-btn');

        const personalCard = document.getElementById('personal-card');
        const businessCard = document.getElementById('business-card');
        const enterpriseCard = document.getElementById('enterprise-card');

        function hideAllCards() {
            personalCard.classList.remove('active');
            businessCard.classList.remove('active');
            enterpriseCard.classList.remove('active');
        }

        personalBtn.addEventListener('click', () => {
            hideAllCards();
            personalCard.classList.add('active');
        });

        businessBtn.addEventListener('click', () => {
            hideAllCards();
            businessCard.classList.add('active');
        });

        enterpriseBtn.addEventListener('click', () => {
            hideAllCards();
            enterpriseCard.classList.add('active');
        });</script>
</body>
</html>
