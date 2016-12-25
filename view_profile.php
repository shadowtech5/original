<?php 
session_start();
if(!isset($_GET['ac_id'])){
	header("Location: landingpage.php");
}
if(!isset($_COOKIE["ev_id"])){
	header("Location: index.php");
}
ob_start();

include 'db_connnection.php';

$sql = 'SELECT * from B_ANCHOR_DETAILS where anchor_id ='.$_GET['ac_id'];
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
	die('Could not get data: ' . mysql_error());
} 
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
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
		<style type="text/css">
		#myCarousel{
			height: 600px;
			width: 100%;
		}
		.btn-1{
			height: 49px;
			font-family: raleway;
		}
		</style>
		<script type="text/javascript">
			;( function( $ ) {

				$( '.swipebox' ).swipebox();
				$( '.swipebox-video' ).swipebox();

			} )( jQuery );
		</script>
		<script type="text/javascript">
			;( function( $ ) {

				$( '.swipebox' ).swipebox( {
					useCSS : true, // false will force the use of jQuery for animations
					useSVG : true, // false to force the use of png for buttons
					initialIndexOnArray : 0, // which image index to init when a array is passed
					hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
					removeBarsOnMobile : true, // false will show top bar on mobile devices
					hideBarsDelay : 3000, // delay before hiding bars on desktop
					videoMaxWidth : 1140, // videos max width
					beforeOpen: function() {}, // called before opening
					afterOpen: null, // called after opening
					afterClose: function() {}, // called after closing
					loopAtEnd: false // true will return to the first image after the last image is reached
				} );

			} )( jQuery );
		</script>
	</head>
	<body>
		<!-- social media bar -->
		<div class="container-fluid light-white social-container">
			<div class="social-menus left">
				<a class="btn btn-social-icon btn-google" href="http://bit.ly/2isAQYF 	">
			    	<span class="fa fa-google"></span>
				</a>
				<a class="btn btn-social-icon btn-twitter" href="http://bit.ly/2ho0cuF">
			    	<span class="fa fa-twitter"></span>
				</a>
				<a class="btn btn-social-icon btn-facebook" href="http://bit.ly/2hDBPFf">
			    	<span class="fa fa-facebook"></span>
				</a>
				<a class="btn btn-social-icon btn-instagram" href="http://bit.ly/2i6upOr">
			    	<span class="fa fa-instagram"></span>
				</a>
			</div>
			<div class="menu-list">
				<span><a href="">OFFERS</a></span>
				<span><a href="">GIFITING</a></span>
				<span><a href="">SUPPORT</a></span>
				<span><span class="glyphicon glyphicon-user"></span><a href="">SIGN IN</a></span>
			</div>
		</div>
		<!-- ends social media bar -->

		<!-- icon bar -->
		<div class="container-fluid light-white icon-container">
			<img src="img/logo.png" class="img-responsive logo">
		</div>
		<!-- ends icon bar -->

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
					<br/>
					<span class="anchor-category">
						<?php
							$sql = 'SELECT * from ANCHOR_CATEGORY_CONNECTER where anchor_id='.$_GET['ac_id'];
							$retval2 = mysql_query( $sql, $conn );
	   
							if(! $retval2 ) 
							{
								die('Could not get data: ' . mysql_error());
							}
	             
							while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC)) 
							{
	                			$sql = 'SELECT * from anchor_category where category_id='.$row2['category_id'];
	                			$retval3 = mysql_query( $sql, $conn );
	   
				                if(! $retval3 ) {
				                	die('Could not get data: ' . mysql_error());
				                }
	                			while($row3 = mysql_fetch_array($retval3, MYSQL_ASSOC)) 
	                			{ 
				        			echo "{$row3['category']}"." / "; 
	                			}
	                		}
	                	?>
                	</span>
				</div>
				<!-- ends name container -->
				<!-- anchor profile image -->
				<div class="col-md-12">
					<img src=<?php echo "$dp"; ?> class="img-responsive">
				</div>
				<!-- ends anchor profile image -->
			</div>
			<!-- ends photo container -->

			<!-- user details entry -->
			<div class="col-md-6 view-profile-user-deails">
				<div class="apart-book-now">
					<!-- menu bar starts -->
					<div class="view-profile-menu-bar col-md-12">
						<span><a  class="active" id="biography">Biography</a></span>
						<span><a  id="booking-info">Booking Info</a></span>
						<span><a  id="photos">Photos</a></span>
						<span><a  id="videos">Videos</a></span>
					</div>
					<!-- ends menu bar -->

					<!-- biography container -->
					<div class="col-md-12 biography-container">
						<span>Biography</span>
						<div class="col-md-12 biography-deails">
							<span>
								<?php echo "{$row['anchor_biography']}"; ?>
							</span>
						</div>
					</div>
					<!-- ends biography container -->

					<!-- booking info container -->
					<div class="col-md-12 booking-info-container hide">
						<span class="main-title">Booking info</span>
						<div class="col-md-12 booking-info-deails">
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Performing Team</span>
								</div>
								<div class="col-md-6 sub-text">
									<span>
										<?php 
											echo "{$row['anchor_performing_team']}" . " Member/s"; 
										?>
									</span>
								</div>
							</div>
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Performing Duration</span>
								</div>
								<div class="col-md-6 description-details sub-text">
									<span>
										<?php
											$ev_id=$_COOKIE["ev_id"];
											$sql = 'SELECT * from M_EVENT_TYPE where event_id='.$ev_id;
											$retvl = mysql_query( $sql, $conn );

											if(! $retvl ) 
											{
												die('Could not get data: ' . mysql_error());
											}


											while($row5 = mysql_fetch_array($retvl, MYSQL_ASSOC)) 
											{
												echo "{$row5['performance_duration']}"; 
											}
										?>
									</span>
								</div>
							</div>
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Language Know</span>
								</div>
								<div class="col-md-6 description-details description-details sub-text">
									<span><?php echo "{$row['anchor_language']}"; ?></span>
								</div>
							</div>
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Event Prefered</span>
								</div>
								<div class="col-md-6 description-details sub-text">
									<span>CAMPUS EVENTS, CONCERTS/FESTIVALS, CORPORATE EVENTS, RESTAURANTS-PUBS-BARS, WEDDINGS</span>
								</div>
							</div>
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Open to travel</span>
								</div>
								<div class="col-md-6 description-details sub-text">
									<span><?php echo "{$row['travel']}"; ?></span>
								</div>
							</div>
							<div class="col-md-12 description-container">
								<div class="col-md-6 description-title text-center">
									<span>Fee</span>
								</div>
								<div class="col-md-6 description-details">
									<a id="budget-fix">
										<button class="col-md-12 btn btn-info btn-1">Fix Budget</button>
									</a>
								</div>
							</div>
							<div class="col-md-12" id="budget-fix_container">
								<div id="available_form">
									<form id="form1" method="POST">
										<input type="hidden" value=<?php echo "{$row['anchor_id']}"; ?> name="anchor_id">
										Duration
										<br>
										<div class="col-md-6">
											<span>Hour</span>
										</div>
										<div class="col-md-6">
											<span>Min</span>
										</div>
										<div class="col-md-6">
											<select class="form-control time left" name="hour">
											<?php 
												for($i=0;$i<=24;$i++){
											?>
											<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
											<?php
												}
											?>
											</select>
										</div>
										<div class="col-md-6">
											<select class="form-control time" name="minute">
											<?php 
												for($i=0;$i<=60;$i++){
											?>
											<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
											<?php
												}
											?>
											</select>
										</div> 
										<div class="col-md-12">
										Days:
											<select class="form-control " name="days">
											<?php 
												for($i=1;$i<=30;$i++){
											?>
											<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
											<?php
												}
											?>
											</select>
										</div>
										<div id="append"></div>
										<button id="test" type="button" class="btn btn-info">Check Amount</button>
									</form>
								</div>
							</div>
							<div id="available_result">

							</div>
							</div>
						</div>
					</div>
					<!-- ends booking-info container -->

					<!-- photos container -->
					<div class="photos-container hide col-md-6">
						<span class="main-title">Photos</span>
						<div class="col-md-12 container-fluid">
							<?php 
								for ($i=1; $i<=5; $i++)
								{
									$photos = $row['image_path'].$i.'.jpg"';
							?>
							<div class="col-md-4 photo-outer-container">
								<div class="photos_indi_container">
									<a rel="gallery-1" href=<?php echo "$photos"; ?> class="swipebox">
										<img src=<?php echo "$photos"; ?> alt="image" class="img-responsive">
									</a>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
					<!-- ends photos container -->

					<!-- video container -->
					<div class="video-container hide col-md-6">
						<span class="main-title">Videos</span>
						<div class="col-md-12 container-fluid">
							<?php 
								for ($i=1; $i<=5; $i++)
								{
									$photos = $row['image_path'].$i.'.jpg"';
							?>
							<div class="col-md-4 photo-outer-container">
								<div class="photos_indi_container">
									<a class="swipebox-video" rel="youtube" href="https://www.youtube.com/watch?v=FIRT7lf8byw">
										<img src=<?php echo "$photos"; ?> alt="image" class="img-responsive">
									</a>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
					<!-- ends videos container -->

					<?php 
						} 
					?>
				</div>

				<!-- booking container -->
				<div class="container booking_container col-md-6 hide">

		            <div class="row">
		            	<button type="button" class="close" data-dismiss="modal">&times;</button> 

		                <div class="col-lg-12 col-lg-offset-2" style="padding-top: 80px; margin-left: 20px;">
		                	<div id="available_result_book">
		                		booking confirmed
		                	</div>

		                    <form id="contact-form" method="post" role="form">
		                        <div class="controls">
		                        <div class="book-now-style">   
				                            <div class="row">
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_name">Firstname *</label>
				                                        <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_lastname">Lastname *</label>
				                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_email">Email *</label>
				                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_phone">Event Type</label>
				                                        <input id="form_phone" type="tel" name="event_type" class="form-control" placeholder="Please enter your Event*">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="col-md-4">
				                                    <div class="form-group">
				                                        <label for="form_email">Mobile *</label>
				                                        <input id="form_email" type="tel" name="mobile" class="form-control" placeholder="Please enter your mobile *" required="required" data-error="Valid email is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                                <div class="col-md-4">
				                                    <div class="form-group">
				                                        <label for="form_email">Phone *</label>
				                                        <input id="form_email" type="tel" name="phone" class="form-control" placeholder="Please enter your Phone number *" required="required" data-error="Valid email is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                                <div class="col-md-4">
				                                    <div class="form-group">
				                                        <label for="form_email">Costume *</label>
				                                        <input id="form_email" type="text" name="costume" class="form-control" placeholder="Please enter costume *" required="required" data-error="Valid email is required.">
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
				                                <div class="col-md-12">
				                                	<button id="book_confirmation"type="button" class="btn btn-success btn-send">Book Now</button>
				                                    
				                                </div>
				                            </div>
				                        </div>        
		                        </div>

		                    </form>

		                </div><!-- /.8 -->

		            </div> <!-- /.row-->

		        </div> <!-- /.container-->
		        <!-- ends booking container -->
			</div>
			<!-- ends user complete details container -->

		</div>
		<!-- ends user details entry -->
			
		<div class="col-md-12 container-fluid footer-dynamic-block">
		<?php
			include 'footer.php';
		?>
		</div>

		
	</body>
</html>