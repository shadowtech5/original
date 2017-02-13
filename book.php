
<?php


	$anchor_id = $_POST['anchor_id'];
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email'];
	$company = $_POST['company_name'];
	$mobile = $_POST['mobile_number'];
	$event_type = $_POST['event_type'];
	$phone = $_POST['phone_number'];
	$address = $_POST['address'];
	$event_place = $_POST['event_place'];
	$event_venue = $_POST['event_venue'];
	$costume = $_POST['costume'];
	$start_hour = $_POST['start_hour'];
	$start_min = $_POST['start_min'];
	$end_hour = $_POST['end_hour'];
	$end_min = $_POST['end_min'];
	$event_message = $_POST['event_message'];

	include 'db_connnection.php';
	include 'email.php';
	include 'sms.php';

	$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$anchor_id;
	$retval = mysql_query( $sql, $conn );
	if(! $retval ) {
		die('Could not get data: ' . mysql_error());
	} 
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		$anchor_name = $row['anchor_name'];
	}

	$email_body = "<p>Dear ".$fname." ".$lname.",</p><p>Your Booking confirmed for anchor " .$anchor_name."</p><p>Please confirm below details</p><table><tr><td>Anchor Name</td><td> ".$anchor_name."</td></tr><tr><td>Event Type</td><td>".$event_type."</td></tr><tr><td>Event Place</td><td>".$event_place."</td></tr><tr><td>Event Venue</td><td>".$event_venue."</td></tr><tr><td>Costume</td><td>".$costume."</td></tr><tr><td>Starting Time</td><td>".$start_hour ." : ".$start_min."</td></tr><tr><td>Ending Time</td><td>".$end_hour ." : ".$end_min."</td></tr><tr><td>About Event</td><td>".$event_message."</td></tr></table>";

	$subject = "Thanks for booking";
	$body = $email_body;
	$return = email_send($email, $fname, $subject, $body, $lname);
	if($return)
		header("Location: index.php");
	else
		header("Location: test.php");

?>