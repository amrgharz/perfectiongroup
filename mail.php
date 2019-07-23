<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name  \n Message: $message";
$recipient = "info@perfectiongroupuae.com";
$subject = "New Entry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https:perfectiongroupuae.com' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
header("Location:http://perfectiongroupuae.com");
?>
