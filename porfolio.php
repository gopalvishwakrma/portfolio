<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Compose the email content
    $to = "vishwakarmagopalcs222343@gmail.com";
    $subject = "New Contact Message";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $email_body);

    // Optionally, you can redirect the user to a "Thank You" page after the form submission
    header("Location: thank_you.html");
    exit;
}
?>
