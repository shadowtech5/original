<?php
$payment_id = $_GET['payment_id'];
$id = $_GET['id'];
include 'db_connnection.php';
include 'email.php';
include 'sms.php';



$sql = "SELECT * from booking where payment_id ='".$payment_id."' and status is NULL";
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
	die('Could not get data: ' . mysql_error());
} 
if(mysql_num_rows($retval)>0)
{	
	$update_sql = "update booking set status='success', razorpay='".$id."' where payment_id ='".$payment_id."'";
	if(mysql_query( $update_sql, $conn ))
	{
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			$anchor_email = $row['anchor_email_id'];
			$event_type = $row['type_of_event'];
			$event_place = $row['event_place'];
			$event_venue = $row['event_venue'];
			$costume = $row['costume'];
			$start_hour = $row['event_start_hr'];
			$start_min = $row['event_start_min'];
			$end_hour = $row['event_end_hr'];
			$end_min = $row['event_end_min'];
			$event_message = $row['event_brief'];
			$fname = $row['first_name'];
			$lname = $row['last_name'];
		}

		$anchor_sql = "SELECT * from B_ANCHOR_DETAILS where email_id='".$anchor_email."'";
		$anchor_retval = mysql_query( $anchor_sql, $conn );
		while($anchor_row = mysql_fetch_array($anchor_retval, MYSQL_ASSOC))
		{
			$anchor_name = $anchor_row['anchor_name'];
		}
		$email = $_COOKIE['user_email'];

		$email_body = "<p>Dear ".$fname." ".$lname.",</p><p>Your Booking confirmed for anchor " .$anchor_name."</p><p>Please confirm below details</p><table><tr><td>Anchor Name</td><td> ".$anchor_name."</td></tr><tr><td>Event Type</td><td>".$event_type."</td></tr><tr><td>Event Place</td><td>".$event_place."</td></tr><tr><td>Event Venue</td><td>".$event_venue."</td></tr><tr><td>Costume</td><td>".$costume."</td></tr><tr><td>Starting Time</td><td>".$start_hour ." : ".$start_min."</td></tr><tr><td>Ending Time</td><td>".$end_hour ." : ".$end_min."</td></tr><tr><td>About Event</td><td>".$event_message."</td></tr></table>";
		$subject = "Thanks for booking";
		$body = $email_body;
		$return = email_send($email, $fname, $subject, $body, $lname);
		if($return)
		{
			echo "<script>alert('Thanks for Booking');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
		else
		{
			header("Location: test.php");
		}
	}
}
?>