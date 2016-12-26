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
	}
	echo $anchor_name." available for this date";
	echo '<a id="book_now_buttonss"><button type="button" class="btn btn-info col-md-12">BOOK NOW</button></a>';
?>