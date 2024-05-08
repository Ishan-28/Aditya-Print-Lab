<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "deshpandeishan75@gmail.com"; // Replace with your email address
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
