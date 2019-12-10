<!doctype html>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['number'];
$message = $_POST['message'];

$to = "rrayford@emich.edu";
$subject = "New Web Inquiry!";
$header = "From: $email";
$body = "You have received a new inquiry from :\n\nNAME:\t\t ".$fname." ".$lname."\nEMAIL: ".$email."\n\nMESSAGE:\t\t ".$message;

//make changes to script once I have a 'thank you' page. Will also need to add 'error' page to else block

if(mail($to, $subject, $body, $header)){
	echo "<script language='javascript'>alert('E-mail sent!'');window.location='http://breezeflooring.com/index.html';</script>";
}
?>