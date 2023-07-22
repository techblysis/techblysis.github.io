<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to_email = "your_email@example.com"; // Replace with your email address
  $subject = "Contact Form Submission";

  // Get form data
  $full_name = $_POST["fullName"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Compose the email content
  $email_body = "Full Name: " . $full_name . "\n";
  $email_body .= "Email ID: " . $email . "\n";
  $email_body .= "Phone No: " . $phone . "\n";
  $email_body .= "Message: " . $message . "\n";

  // Set the email headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  if (mail($to_email, $subject, $email_body, $headers)) {
    echo "Thank you for your message. We will get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
