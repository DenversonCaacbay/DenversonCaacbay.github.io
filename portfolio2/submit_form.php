<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "denverkunfalcon@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Add additional headers if needed (e.g., content-type, CC, BCC)

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>