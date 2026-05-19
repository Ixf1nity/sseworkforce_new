<?php
$page = "career";
include 'header.php';

ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // =========================
    // GET FORM VALUES
    // =========================

    $full_name       = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email           = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone           = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $gender          = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $age             = isset($_POST['age']) ? trim($_POST['age']) : '';
    $qualification   = isset($_POST['qualification']) ? trim($_POST['qualification']) : '';
    $additional_note = isset($_POST['additional_note']) ? trim($_POST['additional_note']) : '';

    // =========================
    // VALIDATION
    // =========================

    if(empty($full_name) || empty($email) || empty($phone) || empty($gender) || empty($age) || empty($qualification)){
        echo "<script>alert('All required fields must be filled'); window.history.back();</script>";
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid Email'); window.history.back();</script>";
        exit;
    }

    if(!preg_match('/^[0-9]{10}$/', $phone)){
        echo "<script>alert('Phone must be 10 digits'); window.history.back();</script>";
        exit;
    }

    if($age < 18 || $age > 60){
        echo "<script>alert('Age must be between 18 and 60'); window.history.back();</script>";
        exit;
    }

    // =========================
    // EMAIL SETTINGS
    // =========================

    $to = "enquiry@sseworkforce.com";
    $subject = "New Career Application";

    // =========================
    // EMAIL BODY (HTML)
    // =========================

    $body  = "<h2>New Career Application</h2>";
    $body .= "<p><b>Name:</b> $full_name</p>";
    $body .= "<p><b>Email:</b> $email</p>";
    $body .= "<p><b>Phone:</b> $phone</p>";
    $body .= "<p><b>Gender:</b> $gender</p>";
    $body .= "<p><b>Age:</b> $age</p>";
    $body .= "<p><b>Qualification:</b> $qualification</p>";
    $body .= "<p><b>Message:</b> $additional_note</p>";

    // =========================
    // HEADERS
    // =========================

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: SSE Workforce Services Private Limited. noreply@sseworkforce.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // =========================
    // SEND MAIL
    // =========================

    if (mail($to, $subject, $body, $headers)) {

        echo "<script>
            alert('Application submitted successfully!');
            window.location.href='career.php';
        </script>";
        exit;

    } else {

        echo "<script>
            alert('Mail sending failed');
            window.history.back();
        </script>";
        exit;
    }
}

ob_end_flush();
?>