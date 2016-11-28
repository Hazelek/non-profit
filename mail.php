<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$topic = $_POST['topic'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message" ;
$recipient = "sonys222@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>