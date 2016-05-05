<?php

$to = "banecve@gmail.com";
$name = $_POST['yourName'];
$email = $_POST['yourEmail'];
$subject = $_POST['yourSubject'];
$message = isset($_POST['yourDescription']) ? $_POST['yourDescription'] : '';
#$message = $_POST['yourDescription'];
$headers = "From: $email";
$sent = mail($to, $name, $subject, $message, $headers);
if ($sent) {
  print "Your mail was sent successfully";
} else {
  print "We encountered an error sending your mail";
}
?>