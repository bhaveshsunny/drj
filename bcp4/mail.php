<?php
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$location = $_POST['location'];
$gender = $_POST['phone'];
$sub = $_POST['subject'];
$date = $_POST['date'];
$message = $_POST['message'];



$formcontent=" From: $name \n Email: $email \n Age: $age \n Location: $location" \n Gender: $gender" \n Subject: $sub"  \n Message: $message";
$recipient = "vndkmrs999@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: index.html');
?>
