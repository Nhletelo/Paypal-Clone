<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['selected_plan'])) {
    header("Location: Login.php");
    exit();
}

$plan = $_SESSION['selected_plan'];
$submitted_data = $_SESSION['submitted_data'] ?? [];
$plan_message = "";

// Custom thank you message
switch (strtolower($plan)) {
    case 'personal':
        $plan_message = "You’ve chosen the <strong>Personal Plan</strong>. We’ll contact you with more information shortly.";
        break;
    case 'business':
        $plan_message = "You’ve selected the <strong>Business Plan</strong>. One of our agents will follow up with next steps.";
        break;
    case 'enterprise':
        $plan_message = "You’ve chosen the <strong>Enterprise Plan</strong>. A dedicated account manager will reach out soon.";
        break;
    default:
        $plan_message = "Thank you for your submission. We’ll be in touch shortly.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Thank You</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 90%;
    }

    .container h1 {
      color: #003087;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .container p {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .data {
      text-align: left;
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      margin-top: 30px;
      background-color: #005ea6;
      color: white;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 6px;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ffc439;
      color: #003087;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Thank You!</h1>
    <p><?php echo $plan_message; ?></p>

    <?php if (!empty($submitted_data)): ?>
    <div class="data">
      <?php foreach ($submitted_data as $label => $value): ?>
        <?php if (!empty($value)): ?>
          <p><strong><?php echo ucfirst($label); ?>:</strong> <?php echo htmlspecialchars($value); ?></p>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <a href="Services.php" class="btn">Back to Services</a>
  </div>

</body>
</html>
