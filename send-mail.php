<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = htmlspecialchars($_POST['full_name']);
    $phone     = htmlspecialchars($_POST['phone']);
    $email     = htmlspecialchars($_POST['email']);
    $subject   = htmlspecialchars($_POST['subject']);
    $message   = htmlspecialchars($_POST['message']);

    // Receiver Email
    $to = "enquiry@sseworkforce.com";

    // Email Subject
    $mail_subject = "New Contact Form Submission";

    // Email Body
    $body = "
    <h2>New Contact Form Message</h2>

    <p><strong>Full Name:</strong> $full_name</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong><br>$message</p>
    ";

    // Headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // From Email
       $headers .= "From: SSE Workforce Services Private Limited. noreply@sseworkforce.com\r\n";

    // Reply To User
    $headers .= "Reply-To: $email" . "\r\n";

    // Send Mail
    if(mail($to, $mail_subject, $body, $headers)) {

        echo "
        <script>
            alert('Message Sent Successfully!');
            window.location.href='contact.php';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Mail Sending Failed!');
            window.history.back();
        </script>
        ";
    }
}

?>