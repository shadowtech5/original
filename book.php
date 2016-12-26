
<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$event_type = $_POST['event_type'];
	$phone = $_POST['phone'];
	$costume = $_POST['costume'];
	$address = $_POST['address'];
	include 'db_connnection.php';
	include 'email.php';
	include 'sms.php';
	email_send($email, $fname, $lname);
?>