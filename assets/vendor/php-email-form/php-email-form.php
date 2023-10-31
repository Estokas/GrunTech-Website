<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'denumalegre4@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';

    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    $mail_success = mail($to, $subject, $email_message, $headers);

    if ($mail_success) {
        echo 'Email sent successfully. Thank you!';
    } else {
        echo 'Oops! Something went wrong and we couldn\'t send your message.';
    }
}
?>