<?php
	include ('db_connnection.php');
	$Id = $_POST["anchor_id"];
	$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$Id;
	$retval = mysql_query( $sql, $conn );
	if(! $retval ) 
	{
		die('Could not get data: ' . mysql_error());
	}

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		$anchor_name = $row['anchor_name'];
		$anchor_id = $row['anchor_id'];
	}
	echo $anchor_name." available for this date";
	$name = str_replace(' ', '', $anchor_name);
	$price_contianer = "price_container_".$name;
	$book_now_buttonss = $name."_book_now_buttonss";
	$anchor_booking_container = $name."_booking_container";
	echo '<a href="book_now.php?anchor_id='.$anchor_id.'"><button type="button" class="btn btn-info col-md-12">BOOK NOW</button></a>';
	echo '<script type="text/javascript">$("#'.$book_now_buttonss.'").click(function(e){console.log("hai");$(".'.$anchor_booking_container.'").removeClass("hide");$(".'.$price_contianer.'").empty();});</script>'

?>
