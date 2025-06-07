<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit();
}

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "paypal_redesign";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_type'])) {
    $formType = $_POST['form_type'];

    try {
        switch ($formType) {
            case 'personal':
                $name = $_POST['p-name'];
                $email = $_POST['p-email'];
                $amount = $_POST['p-amount'];

                $stmt = $pdo->prepare("INSERT INTO personal_payments (recipient_name, recipient_email, amount, user_id) VALUES (?, ?, ?, ?)");
                $stmt->execute([$name, $email, $amount, $_SESSION['user_id']]);
                break;

            case 'business':
                $business = $_POST['b-business'];
                $email = $_POST['b-email'];
                $amount = $_POST['b-amount'];
                $invoice = $_POST['b-invoice'];

                $stmt = $pdo->prepare("INSERT INTO business_payments (business_name, business_email, amount, invoice_number, user_id) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$business, $email, $amount, $invoice, $_SESSION['user_id']]);
                break;

            case 'enterprise':
                $company = $_POST['e-company'];
                $contact = $_POST['e-contact'];
                $email = $_POST['e-email'];
                $details = $_POST['e-details'];

                $stmt = $pdo->prepare("INSERT INTO enterprise_requests (company_name, contact_person, contact_email, details, user_id) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$company, $contact, $email, $details, $_SESSION['user_id']]);
                break;
        }

        // Set selected plan in session
        $_SESSION['selected_plan'] = $formType;

        // Redirect to confirmation page
        header("Location: thank_you.php");
        exit();

    } catch (PDOException $e) {
        die("❌ Error: " . $e->getMessage());
    }
} else {
    header("Location: Services.php");
    exit();
}
?>
