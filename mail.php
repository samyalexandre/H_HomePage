<?php
$to = "s.alexandre@heptaward.com";
$subject = "[Heptaward] From : " . $_POST['email'] . " (Landing page) ";

$message =  "Nom :".$_POST['name'] . "\r\n Phone : " . $_POST['phone']. "\r\n Message : " . $_POST['message'];
$message = wordwrap($message, 70, "\r\n");

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'To:' . $to . "\r\n";
$headers .= 'From: ' . _POST['name'] . "\r\n";

mail($to, $subject, $message, $headers);
?>