<?php
function sendMail(){
    // Define variables for the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Define the recipient email address
    $to = 'med.aziz.hlel@gmail.com';

    // Set the email headers
    $headers = "From: $name <$email>" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send the email using the mail function
    mail($to, $subject, $message, $headers);

    // Redirect the user to a confirmation page
    header('Location: confirmation.html');
    exit();
    }
    ?>