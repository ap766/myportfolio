<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // You can add your validation and processing logic here
    // For example, sending an email
    // Example: Send an email
    $to = "anipatra733@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
