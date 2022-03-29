<?php
$name = $_POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from = 'info@https://electro-pen.github.io/electropen.github.com/electropen.github.com.html';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message.\n";

$to = 'smartbuyA2Z@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact us.html");
?>
