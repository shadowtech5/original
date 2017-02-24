
<?php
	if(isset($_COOKIE['user_email']))
	{
		$payment_id = $_POST['payment_id'];
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

		$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$anchor_id;
		$retval = mysql_query( $sql, $conn );
		if(! $retval ) {
			die('Could not get data: ' . mysql_error());
		} 
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			$anchor_name = $row['anchor_name'];
			$anchor_email = $row['email_id'];
		}
		$check_booking = "select * from booking where payment_id ='".$payment_id."' and client_email='".$email."'";
		$retval_booking = mysql_query( $check_booking, $conn );
		if(mysql_num_rows($retval_booking)>0)
		{
			echo "<script>alert('Already Booked Try Again');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
		else
		{
			$update_booking = "update booking set anchor_email_id='".$anchor_email."', first_name='".$fname."' ,last_name='".$lname."', client_email='".$email."', company_name='".$company."', client_mobile='".$mobile."', client_phone='".$phone."', address='".$address."', type_of_event='".$event_type."', event_place='".$event_place."', event_venue='".$event_venue."', costume='".$costume."', event_start_hr=".$start_hour.", event_start_min=".$start_min.", event_end_hr=".$end_hour.", event_end_min=".$end_min.", event_brief='".$event_message."' where payment_id='".$payment_id."'";
			if(mysql_query( $update_booking, $conn ))
			{
				header("Location: payment.php?payment=".$payment_id);
			}
		}
	}
	else
	{
		echo"<script>alert('please Login and retry');</script>";
		echo "<script>window.location.href='index.php';</script>";

	}

	// include 'email.php';
	// include 'sms.php';

	// $sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$anchor_id;
	// $retval = mysql_query( $sql, $conn );
	// if(! $retval ) {
	// 	die('Could not get data: ' . mysql_error());
	// } 
	// while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	// {
	// 	$anchor_name = $row['anchor_name'];
	// }
	// $email_body = "<p>Dear ".$fname." ".$lname.",</p><p>Your Booking confirmed for anchor " .$anchor_name."</p><p>Please confirm below details</p><table><tr><td>Anchor Name</td><td> ".$anchor_name."</td></tr><tr><td>Event Type</td><td>".$event_type."</td></tr><tr><td>Event Place</td><td>".$event_place."</td></tr><tr><td>Event Venue</td><td>".$event_venue."</td></tr><tr><td>Costume</td><td>".$costume."</td></tr><tr><td>Starting Time</td><td>".$start_hour ." : ".$start_min."</td></tr><tr><td>Ending Time</td><td>".$end_hour ." : ".$end_min."</td></tr><tr><td>About Event</td><td>".$event_message."</td></tr></table>";

	// $subject = "Thanks for booking";
	// $body = $email_body;
	// $return = email_send($email, $fname, $subject, $body, $lname);
	// if($return)
	// 	header("Location: payment.php?payment=".$payment_id);
	// else
	// 	header("Location: test.php");

?>