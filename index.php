<?php 
session_start();
// if(!isset($_SESSION['login_user'])) { 
// 	header("Location: login.php");
// }
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
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> -->

		<link href="css/font-awesome.css" rel="stylesheet">
	    <link href="css/bootstrap-social.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="css/custom_style.css">
		<script type="text/javascript" src="js/custom_js.js"></script>
	</head>
	<body>
		
		<div class="container-fluid background_image img-responsive img-responsive">
			<!-- social media bar -->
			<div class="container-fluid light-white social-container">
				<div class="social-menus left">
					<a class="btn btn-social-icon btn-google">
				    	<span class="fa fa-google"></span>
					</a>
					<a class="btn btn-social-icon btn-twitter">
				    	<span class="fa fa-twitter"></span>
					</a>
					<a class="btn btn-social-icon btn-facebook">
				    	<span class="fa fa-facebook"></span>
					</a>
					<a class="btn btn-social-icon btn-instagram">
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
						<img src="img/slider1.jpeg" alt="Chania">
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

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- ends slider -->

			<!-- event types -->
			<div class="container-fluid text-center event-container">
				<a href="landingpage.php?ev_id=1">
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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
					<div class="col-md-4 event-type">
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

			<!-- footer starts -->
			<div class="footer-bar container-fluid">
				<div class="col-md-2 type_of_events">
					<span>TYPE OF EVENTS</span>
					<ul>
						<li><a href="landingpage.php?ev_id=1">Campus</a></li>
						<li><a href="landingpage.php?ev_id=1">Charity</a></li>
						<li><a href="landingpage.php?ev_id=1">Corporate</a></li>
						<li><a href="landingpage.php?ev_id=1">Fashion Show</a></li>
						<li><a href="landingpage.php?ev_id=1">Kids Party</a></li>
						<li><a href="landingpage.php?ev_id=1">Kids Party</a></li>
						<li><a href="landingpage.php?ev_id=1">Wedding</a></li>
						<li><a href="landingpage.php?ev_id=1">Private Party</a></li>
						<li><a href="landingpage.php?ev_id=1">Exhibition</a></li>
						<li><a href="landingpage.php?ev_id=1">Inaguration</a></li>
						<li><a href="landingpage.php?ev_id=1">Religion</a></li>
						<li><a href="landingpage.php?ev_id=1">Promotion</a></li>
						<li><a href="landingpage.php?ev_id=1">Concert<</li>
					</ul>
				</div>
				<div class="col-md-2">
					<span>BOOKMYANCHORS APP</span>
					<ul>
						<li>Android</li>
						<li>iPhone</li>
					</ul>
				</div>
				<div class="col-md-2">
					<span>COUNTRIES</span>
					<ul>
						<li>India</li>
					</ul>
				</div>
				<div class="col-md-2">
					<span>HELP</span>
					<ul>
						<li>FAQs</li>
						<li>Terms and Conditions</li>
						<li>Privacy Policy</li>
					</ul>
				</div>
				<div class="col-md-2">
					<span>BOOKMYANCHORS NEWS</span>
					<ul>
						<li>Blog</li>
						<li>Press Release</li>
						<li>Press Coverage</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
			<div class="container-fluid footer-company">
				<div class="footer-logo">
					<img src="img/logo.png" class="img-responsive logo left">
					<div class="social-menus right">
						<a class="btn btn-social-icon btn-google">
					    	<span class="fa fa-google"></span>
						</a>
						<a class="btn btn-social-icon btn-twitter">
					    	<span class="fa fa-twitter"></span>
						</a>
						<a class="btn btn-social-icon btn-facebook">
					    	<span class="fa fa-facebook"></span>
						</a>
						<a class="btn btn-social-icon btn-instagram">
					    	<span class="fa fa-instagram"></span>
						</a>
					</div>
				</div>
			</div>
			<!-- ends footer -->
		</div>

	</body>
</html>