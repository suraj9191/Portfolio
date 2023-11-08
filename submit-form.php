<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up the recipient email address
  $to = "shivaiyer79@gmail.com";

  // Set up the email subject
  $subject = "New Message from Contact Form";

  // Set up the email body
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";

  // Set up the email headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
