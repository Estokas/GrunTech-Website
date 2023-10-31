<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "denumalegre4@gmail.com"; // Replace with your recipient's email address

  // Create email headers
  $headers = "From: $name <$email>" . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "success"; // You can customize the success message
  } else {
    echo "error"; // You can customize the error message
  }
} else {
  header("HTTP/1.0 403 Forbidden");
  echo "Access Forbidden";
}
?>