<?php
$name = $_POST['name'];
$visitor_email = $_post['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'gowthamazmeera@gmail.com';
$email_subject = 'new form submission';
$email_body = "user name:$name.\n".
              "user name:$visitor_email.\n".
              "user name:$subject.\n".
              "user name:$message.\n";





$to = 'gowthamrider09@gmail.com';

$headers = "from:$email_form \r\n";

$headers .= "reply-to: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location:contact.html");






?>