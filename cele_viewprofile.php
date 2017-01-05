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

$sql = 'SELECT * from celebrity_anchors where id ='.$_GET['ac_id'];
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
		<style type="text/css">
		#myCarousel{
			height: 600px;
			width: 100%;
		}
		html{
			overflow-x: hidden;
		}
		body{
			overflow-x: hidden;
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
		<?php include ('header.php'); ?>
		<!-- ends social media bar -->

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
			<!-- ends photo container -->

			<!-- user details entry -->
			<div class="col-md-6 view-profile-user-deails">
				<div class="apart-book-now">
					<!-- menu bar starts -->
					<div class="view-profile-menu-bar col-md-12">
						<span><a  class="active" id="biography">Biography</a></span>
						<span><a  id="photos">Photos</a></span>
						<span><a  id="videos">Videos</a></span>
					</div>
					<!-- ends menu bar -->

					<!-- biography container -->
					<div class="col-md-12 biography-container">
						<span>Biography</span>
						<div class="col-md-12 biography-deails">
							<span>
								<?php echo "{$row['bioraphy']}"; ?>
							</span>
						</div>
					</div>
					<!-- ends biography container -->

					<!-- photos container -->
					<div class="photos-container hide col-md-12">
						<span class="main-title">Photos</span>
						<div class="col-md-12 container-fluid">
							<?php 
								$directory = str_replace('"', '', $row['image_path']);
								$files = glob($directory . '*.jpg');
								$filecount = count( $files ) - 1;
								for ($i=1; $i<=$filecount; $i++)
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
					<div class="video-container hide col-md-12">
						<span class="main-title">Videos</span>
						<div class="col-md-12 container-fluid">
							<?php
								$sql_video = 'SELECT * from anchors_performance where anchor_name="'.$row['anchor_name'].'"';
								$retval_video = mysql_query( $sql_video, $conn );

								if(! $retval_video ) 
								{
									die('Could not get data: ' . mysql_error());
								}
								$size = mysql_num_rows($retval_video);
								if($size>0)
								{
									$i = 1;
									while($row_video = mysql_fetch_array($retval_video, MYSQL_ASSOC)) 
									{ 
										if($i<=$size)
										{
											$photos = '"'.$row_video['video_link_photos'].'/'.$i.'.png"';
											$i = $i + 1;
											$video_link = '"'.$row_video['video_link'].'"';
							?>
							<div class="col-md-4 photo-outer-container">
								<div class="photos_indi_container">
									<a class="swipebox-video" rel="youtube" href=<?php echo $video_link; ?>>
										<img src=<?php echo "$photos"; ?> alt="image" class="img-responsive">
									</a>
								</div>
							</div>
							<?php
									}
								}
							}
							else
							{
								echo "no data";
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
		                <div class="col-lg-12 col-lg-offset-2" style="padding-top: 80px; margin-left: 20px;">
		                	<button type="button" class="close" data-dismiss="modal">&times;</button>
		                	<div id="available_result_book">
		                		booking confirmed
		                	</div>

		                    <form id="contact-form" method="post" role="form">
		                        <div class="controls">
		                        <span class="customer-details">Customer Details</span>
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
				                                        <label for="form_phone">Company Name</label>
				                                        <input id="form_phone" type="tel" name="event_type" class="form-control" placeholder="Please enter your company name*">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_email">Mobile *</label>
				                                        <input id="form_email" type="tel" name="mobile" class="form-control" placeholder="Please enter your mobile *" required="required" data-error="Valid email is required.">
				                                        <div class="help-block with-errors"></div>
				                                    </div>
				                                </div>
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <label for="form_email">Phone *</label>
				                                        <input id="form_email" type="tel" name="phone" class="form-control" placeholder="Please enter your Phone number *" required="required" data-error="Valid email is required.">
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