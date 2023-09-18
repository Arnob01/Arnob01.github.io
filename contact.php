<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "sadmansakibarnob80@gmail.com"; // Replace with your email address
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>
