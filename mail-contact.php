<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $adress  = trim($_POST['adress']);
    $service = trim($_POST['service']);
    $note    = trim($_POST['note']);

    $to = "aqib21028@gmail.com"; // ← replace this with your email
    $subject = "New Contact Form Message from $name";

    $message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color:#f9f9f9; padding:20px; }
            .container { background:#fff; padding:20px; border-radius:8px; box-shadow:0 0 10px #ddd; }
            h2 { color:#333; }
            p { margin:8px 0; }
            .footer { margin-top:20px; font-size:13px; color:#777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Inquiry Received</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Address:</strong> $adress</p>
            <p><strong>Service:</strong> $service</p>
            <p><strong>Message:</strong><br>$note</p>
            <div class='footer'>
                <p>This message was sent from your website contact form.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $name <$email>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
            alert('Thank you! We will respond to you shortly.');
            window.history.back();
        </script>";
    } else {
        echo "<script>
            alert('Error occurred while sending the message. Please try again later.');
            window.history.back();
        </script>";
    }
}
?>
