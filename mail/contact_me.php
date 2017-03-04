<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	  echo "Not all arguments Provided!";
	  return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to1 = 'riodweber@gmail.com';
// $to2 = 'bd89431@huskies.bloomu.edu';
$to3 = 'ppolstra@bloomu.edu';
// $to4 = 'dp92071@huskies.bloomu.edu';

$email_subject = "BloomCon Contact, From: $name";
$email_body = "New message from Bloomcon Website.\n\n"."Here are the details:\nName:\n-->$name\nEmail:\n-->$email_address\nPhone:\n-->$phone\n\nMessage:\n$message";

$headers = "From: Bloomcon@bloomcon.com\r\n";
$headers .= "Reply-To: $email_address\r\n";
$headers .= "Return-Path: Bloomcon@bloomcon.com\r\n";

mail($to1,$email_subject,$email_body,$headers);
// mail($to2,$email_subject,$email_body,$headers);
mail($to3,$email_subject,$email_body,$headers);
// mail($to4,$email_subject,$email_body,$headers);
return true;			
?>