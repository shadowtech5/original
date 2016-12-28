
<?php
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	// $fname = "jishnu";
	// $email = "test";
	// $address = "hai";
	include 'db_connnection.php';
	include 'email.php';
	$subject = "Feedback from ". $fname;
	$body = "Email:". $email."<br>Customer says:".$address;
	email_send("info@bookmyanchors.com", $fname, $subject, $body);
?>