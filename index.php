<?php 
session_start();
// if(!isset($_SESSION['login_user'])) { 
// 	header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>book my anchor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> -->

		<link href="css/font-awesome.css" rel="stylesheet">
	    <link href="css/bootstrap-social.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="css/custom_style.css">
		<script type="text/javascript" src="js/custom_js.js"></script>
		
		<style type="text/css">
			.background_image{
				background-image: none;
				background-color: #ffffff !important;
			}
			.social-container1{
				position: fixed;
				z-index: 1000;
			}
			input[type=text] {
			    min-width: 350px;
			    height: 60px;
			    box-sizing: border-box;
			    border: 2px solid #ccc;
			    border-radius: 4px;
			    font-size: 16px;
			    background-color: white;
			    background-image: url('searchicon.png');
			    background-position: 10px 10px; 
			    background-repeat: no-repeat;
			    padding: 12px 20px 12px 40px;
			    -webkit-transition: width 0.4s ease-in-out;
			    transition: width 0.4s ease-in-out;
			}
		</style>
		<style type="text/css">
			#myCarousel{
				/*height: 600px;*/
				width: 100%;
			}

		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				console.log("nf");
				$(".background_image").scroll(function(){
					if($(this).scrollTop()>400)
					{
						$(".social-container1").removeClass("hide");
					}
					else{
						$(".social-container1").addClass("hide");	
					}
				});
			});
		</script>
	</head>
	<body>
		<div class="social-container1 hide">
			<div class="col-md-12 container-fluid light-black">
				<!-- icon bar -->
				<div class="container-fluid light-black icon-container">
					<img src="img/logo.png" class="img-responsive logo">
				</div>
				<!-- ends icon bar -->
			</div>
		</div>
			
		<div class="container-fluid background_image img-responsive img-responsive">
			<!-- social media bar -->
			<?php include('header.php'); ?>
			<!-- ends social media bar -->

			<!-- slider -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- Ends Indicators -->			

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/slider1.jpg" alt="Chania">
					</div>

					<div class="item">
						<img src="img/slider2.jpg" alt="Chania">
					</div>

					<div class="item">
						<img src="img/slider3.jpg" alt="Flower">
					</div>

					<div class="item">
						<img src="img/slider4.jpg" alt="Flower">
					</div>
				</div>
				<!-- Ends Wrapper for slides -->
			</div>
			<!-- ends slider -->

			<!-- event types -->
			<div class="container-fluid text-center event-container">
				<p> FEATURED EVENTS </p>
				<a href="landingpage.php?ev_id=1">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Campus.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Campus</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=2">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Charity.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Charity</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=3">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Corporate.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Corporate</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=4">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Fashion.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Fashion Show</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=5">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Kids Party.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Kids Party</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=6">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Wedding.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Wedding</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=7">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Private.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Private Party</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=8">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Exhibition.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Exhibition</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=9">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Campus.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Inaguration</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=10">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Religion.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Religion</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=11">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Promotion.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Promotion</h4>
							</div>
						</div>
					</div>
				</a>
				<a href="landingpage.php?ev_id=12">
					<div class="col-md-3 event-type">
						<div class="border">
							<div class="event-logo">
								<img src="img/icons/Concert.png" class="img-responsive">
							</div>
							<div class="event-name">
								<h4>Concert</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- ends event types -->

			<?php
				include 'footer.php';
			?>
		</div>

	</body>
</html>