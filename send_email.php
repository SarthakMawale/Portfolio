<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"] ?? "Not provided"; // Optional field
    $message = $_POST["message"];

    // Your email address where you want to receive messages
    $to = "devsarthak.business@gmail.com";
    $subject = "New Contact Form Submission from $name";

    // Email content
    $email_content = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Message:\n $message
    ";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>