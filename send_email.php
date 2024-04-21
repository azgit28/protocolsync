<?php
// Define the recipient email adress
$to = "weifengliu774@gmail.com";

// Define the subject of the mail
$subject = "Test email";

// Define the messagre body
$message = "This is an email sent from my website using PHP";

// Define additional headers (optional)
// $headers = "From: sender@example.com\r\n";
// $headers = "Reply-To: sender@example.com\r\n";
// $headers = "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail ($to, $subject, $message)) {
    echo "Email sent successfully";
} else {
    echo "Email not sent successfully"
}