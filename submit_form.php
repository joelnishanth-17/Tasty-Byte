<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // You can save the data to a database or send it via email
    // For example, to send an email:
    $to = "your-email@example.com";
    $subject = "New Contact Us Message";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
