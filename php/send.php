<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'mabduljalil42@gmail.com';
    $subject = 'Feedback from Portfolio Site';
    $headers = "From: $email";

    $body = "Email: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your feedback!";
    } else {
        echo "There was an error sending your feedback. Please try again.";
    }
}
?>
