<?php


$name = $_POST["name"];
$visitor_email = $_POST["email"];
$message = $_POST["message"];

$email_form = 'tutorial@gmail.com';
$email_subject = "New Message Received";
$email_body = "User Name: $name.\n".
                  "User Name: $visitor_email.\n".
                  "User Message: $message.\n";



    $to = "narcismorar@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers .= "Replay-To: $visitor \r\n";
    mail($to, $email_subject, $email_body, $headers);
    headers("Location: index.html");

?>
