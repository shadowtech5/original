<?php
	include 'db_connnection.php';
	$achor_id = $_POST['anchor_id'];
	$days = $_POST['days'];
	// $time_duration = $_POST['time_duration'];
	$hour = $_POST['hour'];
	$minute = $_POST['minute'];
	$place = $_POST['place'];
	

	$ev_id=$_COOKIE["ev_id"];
	$sql = 'SELECT * from M_EVENT_TYPE where event_id='.$ev_id;
	$retvl = mysql_query( $sql, $conn );

	if(! $retvl ) {
	die('Could not get data: ' . mysql_error());
	}


	while($row5 = mysql_fetch_array($retvl, MYSQL_ASSOC)) {
		$duration = $row5['performance_duration'];
	}

	// $time_split = explode(":", $time_duration);
	$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id='.$achor_id;
	$retval = mysql_query( $sql, $conn );
	if(! $retval ) {
		die('Could not get data: ' . mysql_error());
	} 
	$min_minute = substr($duration, 0, 2);
	$max_minute = substr($duration, 6, 3);
	

	$amount = 0;
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		$anchor_price = $row['price'];
		$anchor_name = $row['anchor_name'];	
		$anchor_email = $row['email_id'];
	}


	$max_minute_to_hour = (int)((int)$max_minute / 60) + 1;
	if ($hour or $minute){
		if($max_minute_to_hour == $hour)
		{	
			$amount =  $amount + $anchor_price ;
		}
		else
		{	$amount = $anchor_price;
			while($max_minute_to_hour<$hour)
			{
				$amount = $amount + 500;
				$max_minute_to_hour++;
			}
		}
		if($days)
		{
			$amount = $amount * $days;
		}
	}
	else
	{
		$amount = $anchor_price * $days;
	}
	
	$out_of_station_sql = 'SELECT * from out_of_station where place_name="'.$place.'"';
	$out_of_station_retval = mysql_query( $out_of_station_sql, $conn );
	if(! $out_of_station_retval ) {
		die('Could not get data: ' . mysql_error());
	} 
	while($out_of_station_row = mysql_fetch_array($out_of_station_retval, MYSQL_ASSOC))
	{ 
		$place_amount = $out_of_station_row['amount'];
	}
	$amount = $amount + $place_amount;
	if ($days >= 5)
	{
		for ($d = 5; $d<=$days; $d++)
		{
			$amount = $amount - 1000;
		}
	}
	$randum_number = sprintf("%06d", mt_rand(1, 999999));
	$booking_table_query = "insert into booking(payment_id, anchor_email_id, amount, event_place, days) values('".$randum_number."', '".$anchor_email."',".$amount.", '".$place."' ,".$days.")";
	if(mysql_query($booking_table_query, $conn))
	{
		echo $anchor_name." costs almost for :". $amount;
		echo '<a href="book_now.php?anchor_id='.$achor_id.'&tran_id='.$randum_number.'"><button type="button" class="btn btn-info col-md-12">BOOK NOW</button></a>';
	}
	else
	{
		echo "Something went wrong. Please try after sometimes";
		echo mysql_error();
	}
	// echo '<script>$("#book_now_buttonss").click(function(e){
 //        console.log("inside book");
 //        $(".view-profile-user-deails").addClass("hide");
 //        $(".booking_container").removeClass("hide");
 //    });</script>';
?>