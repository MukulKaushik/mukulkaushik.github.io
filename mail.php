<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "1kaushikmukul@gmail.com"; // Your email address where you want to receive emails
    $name = $_POST["contact-name"];
    $phone = $_POST["contact-phone"];
    $subject = $_POST["subject"];
    $email = filter_var($_POST["contact-email"], FILTER_SANITIZE_EMAIL);
    $message = $_POST["contact-message"];
    $full_message = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage: $message";
    $headers = "From: $email";
    if (mail($to, $subject, $full_message, $headers)) {
        echo "<script>alert('Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
    }
}
?>