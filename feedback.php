
<?php
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	include 'db_connnection.php';
	include 'email.php';
	$subject = "Feedback from ". $fname;
	$body = $address;
	email_send($email, $fname, $subject, $body);
?>