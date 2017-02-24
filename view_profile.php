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
		<script type="text/javascript">
			$(document).ready(function(){
				$(".close_booking").click(function(e){
					console.log("close");
					$(".booking_container").addClass("hide");
					$(".view-profile-user-deails").removeClass("hide");
				})
			});
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
						<span><a  id="clientsandtest">Events&amp;Clients</a></span>
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
									<span><?php echo "{$row['event_prefer']}"; ?></span>
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
									<span>Preffered Place</span>
								</div>
								<div class="col-md-6 description-details description-details sub-text">
									<span><?php echo "{$row['preffered_place']}"; ?></span>
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
												for($i=1;$i<=24;$i++){
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
										<div class="col-md-12">
										Place:
											<select class="form-control " name="place">
											<?php 
											$out_of_station_sql = 'SELECT * from out_of_station';
											$out_of_station_retval = mysql_query( $out_of_station_sql, $conn );
											if(! $out_of_station_retval ) {
												die('Could not get data: ' . mysql_error());
											} 
											while($out_of_station_row = mysql_fetch_array($out_of_station_retval, MYSQL_ASSOC))
											{ 

											?>
											<option value=<?php echo $out_of_station_row['place_name'];  ?>><?php echo $out_of_station_row['place_name'];  ?></option>
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
								echo "Will be updated Soon";
							}
							?>
						</div>
					</div>
					<!-- ends videos container -->

					<!-- testmonial -->
					<div class="testmonial hide col-md-12">
						<span class="main-title">Events &amp; Clients</span>
						<div class="col-md-12 container-fluid">
							Will be updated soon
						</div>
					</div>
					<!-- ends testmonial -->

					<?php 
						} 
					?>
				</div>
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