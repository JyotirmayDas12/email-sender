<?php
$to = "jyotirmaydas509@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "jyotigameryt@gmail.com";
$headers = "From: Jyotirmay Das";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
