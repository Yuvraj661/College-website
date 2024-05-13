<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='abc.com';
$email_subject='New form submission';
$email_body="User Name: $name.\n".
             "User email: $visitor_email.\n".
             "Subject: $subject.\n".
             "USer message: $message.\n";

$to='syuvraaj009@gmail.com';
$headers="From:$email_from\r\n" ;
$headers="Reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");



?>
