<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$suject = $_POST['subject'];
$message = $_POST['message'];

$eamil_from =' tenlekshe@gmail.com';

$email_subject = 'New Form Submisson'

$email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $visitor.\n";

               
$to = 'bestg4u@gmail.com';

$headers ="From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject, $email_subject,$headers);

header("Location: contact.html");
?>