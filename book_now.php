<?php 
session_start();
if(!isset($_GET['anchor_id'])){
	header("Location: landingpage.php");
}
if(!isset($_COOKIE["ev_id"])){
	header("Location: index.php");
}
ob_start();

include 'db_connnection.php';

$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$_GET['anchor_id'];
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
	die('Could not get data: ' . mysql_error());
} 
?> 

<!DOCTYPE html>
<html>
	<head>
		<title>bookmyanchors</title>
		<link rel="icon" type="image/png" href="img/logo/title-logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="css/swipebox.css">
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> -->

		<link href="css/font-awesome.css" rel="stylesheet">
	    <link href="css/bootstrap-social.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="css/custom_style.css">
		<script type="text/javascript" src="js/custom_js.js"></script>
	</head>
	<body>
	<?php include('header.php');?>

	<?php 
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{ 
				$dp = $row['image_path'].'main.jpg"';
		?>

		<!-- user complete details container -->
	<div class="container-fluid user-details-container">
	<!-- photo container -->
		<div class="col-md-6">
			<!-- name container -->
			<div class="col-md-12 user-name-container">
				<span><?php echo "{$row['anchor_name']}"; ?></span>
			</div>
			<!-- ends name container -->
			<!-- anchor profile image -->
			<div class="col-md-12">
				<img src=<?php echo "$dp"; ?> class="img-responsive">
			</div>
			<!-- ends anchor profile image -->
		</div>
		<?php 
			}
		 ?>
		<!-- booking container -->
		<div class="col-md-6 view-profile-user-deails">
			<div class="col-lg-12 col-lg-offset-2" style="padding-top: 28px; margin-left: 2px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			    <form id="contact-form" method="post" role="form" action="book.php">
			    	<input type="hidden" name="anchor" value="normal">
			    	<input type="hidden" name="anchor_id" value=<?php echo $_GET['anchor_id']; ?> >
			        <div class="controls">
			        <span class="customer-details">Customer Details</span>
			        <div class="book-now-style">    
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_name">Firstname *</label>
			                                <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_lastname">Lastname *</label>
			                                <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Email *</label>
			                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_phone">Company Name</label>
			                                <input id="form_phone" type="text" name="company_name" class="form-control" placeholder="Please enter your company Name*">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Mobile *</label>
			                                <input id="form_email" type="tel" name="mobile_number" class="form-control" placeholder="Please enter your mobile number*" required="required" data-error="Valid email is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Phone *</label>
			                                <input id="form_email" type="tel" name="phone_number" class="form-control" placeholder="Please enter your phone number *" required="required" data-error="Valid email is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_message">Address *</label>
			                                <textarea id="form_message" name="address" class="form-control" placeholder="Please enter address *" rows="4" required="required" data-error="Please,enter address."></textarea>
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                    </div>
			                    <span class="customer-details">Event Details</span>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_name">Type of Event *</label>
			                                <!-- <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
			                                <div class="help-block with-errors"></div> -->
			                                <select class="form-control" name="event_type">
												<?php 
													$event_sql = 'SELECT * from M_EVENT_TYPE';
													$event_retval = mysql_query( $event_sql, $conn );

													if(! $event_retval ) {
													die('Could not get data: ' . mysql_error());
													}   
													while($event_row = mysql_fetch_array($event_retval, MYSQL_ASSOC)) {
													?>
													<option value=<?php echo "{$event_row['event_type']}"; ?>><?php echo "{$event_row['event_type']}"; ?></option>
												<?php } ?>
			                                	<option></option>
			                                </select>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_lastname">Event Place *</label>
			                                <input id="form_lastname" type="text" name="event_place" class="form-control" placeholder="Please enter event place *" required="required" data-error="Lastname is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Event Venue *</label>
			                                <input id="form_email" type="text" name="event_venue" class="form-control" placeholder="Please enter event venue *" required="required" data-error="Valid email is required.">
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_phone">Costume</label>
			                                <select class="form-control" name="costume">
			                                	<option value="Formal">
			                                		Formal
			                                	</option>
			                                	<option value="Semi Formal">
			                                		Semi Formal
			                                	</option>
			                                	<option value="Casual">
			                                		Casual
			                                	</option>
			                                	<option value="Traditional">
			                                		Traditional
			                                	</option>
			                                	<option value="Party Wear">
			                                		Party Wear
			                                	</option>
			                                </select>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Event Starting time *</label>
			                                <br>
			                                <select class="form-control col-md-6" name="start_hour">
						              			<?php 
						              				for($i=0;$i<=24;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
											</select>
											<br>
											<select class="form-control col-md-6" name="start_min">
						              			<?php 
						              				for($i=00;$i<=60;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
											</select>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_email">Event Ending Time *</label>
			                                <select class="form-control col-md-6" name="end_hour">
						              			<?php 
						              				for($i=0;$i<=24;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
											</select>
											<br>
											<select class="form-control col-md-6" name="end_min">
						              			<?php 
						              				for($i=00;$i<=60;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
											</select>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <div class="form-group">
			                                <label for="form_message">Event Briefing *</label>
			                                <textarea id="form_message" name="event_message" class="form-control" placeholder="Please enter event briefing *" rows="4" required="required" data-error="Please,enter address."></textarea>
			                                <div class="help-block with-errors"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-12">
			                            <input type="submit" class="btn btn-success btn-send" value="Book Now">
			                        </div>
			                    </div>
			        	</div>        
			        </div>
			    </form>
			</div>
		</div>	<!-- /.8 -->
		        <!-- ends booking container -->
	</div>
		<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
		</div>
	</body>
</html>