<?php session_start(); ?>
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
			@import url('https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin-ext');

			.contact-section {padding: 50px 0;}
			.contact-section h2 {color: #333333;
  				font-size: 18px;
  				font-family: 'Lato', sans-serif;
  				font-weight: 700;
  				margin: 0 0 15px;
  				text-transform: uppercase;
  				margin-bottom: 25px;				}
			.contact-section p {margin-bottom: 30px; 
			font-family: 'Lato', sans-serif;
			font-weight: 700;}
			.contact-section ul.information-list {margin: 0; padding: 0;}
			.contact-section ul.information-list li { list-style: none;
  			overflow: hidden;
  			border-bottom: 1px solid #dddddd;
  			margin-bottom: 15px;
 			padding-bottom: 15px;}
			.contact-section ul.information-list li i {float: left;
  			color: #333333;
  			font-size: 13px;
  			display: inline-block;
  			line-height: 24px;}
			.contact-section ul.information-list li span {display: block;
  			font-size: 13px;
			color: #5a5a5a;
			font-family: 'Lato', sans-serif;
			font-weight: 400;
			line-height: 22px;
			margin: 0 0 10px;
			margin-bottom: 0px;
			margin-left: 25px;
			color: #333333;}
			.contact-section ul.information-list li a {font-size: 13px;
			  color: #5a5a5a;
			  font-family: 'Lato', sans-serif;
			  font-weight: 400;
			  line-height: 22px;
			  margin: 0 0 10px;
			  display: inline-block;
			  margin-left: 25px;
			  margin-bottom: 10px;
			  color: #333333;}
			.contact-section ul.information-list li:last-child {
			  border-bottom: none;
			  margin-bottom: 0;
			  padding-bottom: 0;
			}
			#contact-form,
			.comment-form {
			  margin-bottom: -30px;
			}
			#contact-form input[type="text"],
			.comment-form input[type="text"],
			#contact-form textarea,
			.comment-form textarea {
			  width: 100%;
			  padding: 10px 20px;
			  border: 1px solid #dedede;
			  margin-bottom: 20px;
			  outline: none;
			  transition: all 0.2s ease-in-out;
			  -moz-transition: all 0.2s ease-in-out;
			  -webkit-transition: all 0.2s ease-in-out;
			  -o-transition: all 0.2s ease-in-out;
			  color: #5a5a5a;
			  font-size: 13px;
			  font-family: 'Lato', sans-serif;
			}
			#contact-form input[type="text"]:focus,
			.comment-form input[type="text"]:focus,
			#contact-form textarea:focus,
			.comment-form textarea:focus {
			  border: 1px solid #0a287e;
			}
			#contact-form textarea,
			.comment-form textarea {
			  height: 146px;
			}
			#contact-form input[type="submit"],
			.comment-form input[type="submit"] {
			  padding: 12px 30px;
			  outline: none;
			  border: none;
			  background: #4f6fad;
			  color: #ffffff;
			  font-size: 13px;
			  font-family: 'Lato', sans-serif;
			  text-transform: uppercase;
			  font-weight: 700;
			  transition: all 0.2s ease-in-out;
			  -moz-transition: all 0.2s ease-in-out;
			  -webkit-transition: all 0.2s ease-in-out;
			  -o-transition: all 0.2s ease-in-out;
			  margin-bottom: 10px;
			}
			#contact-form input[type="submit"]:hover,
			.comment-form input[type="submit"]:hover {
			  opacity: 0.7;
			}
			#contact-form .message,
			.comment-form .message {
			  height: 30px;
			  padding: 10px 20px;
			  font-size: 13px;
			  font-family: 'Lato', sans-serif;
			}
			#contact-form .message.error,
			.comment-form .message.error {
			  color: #e74c3c;
			  background: rgba(246, 80, 80, 0.4);
			  border: 1px solid #e74c3c;
			}
			#contact-form .message.success,
			.comment-form .message.success {
			  color: #29b504;
			  background: rgba(63, 220, 21, 0.4);
			  border: 1px solid #29b504;
			}

		</style>
	</head>
	<body>
		<?php include('header.php');?> 
		<div class="contact-section">
			<div class="container">
				<div class="col-md-8">
					<form id="contact-form">
						<h2>Send us a message</h2>
						<div class="row">
							<div class="col-md-4">
								<input name="name" id="name" type="text" placeholder="Name">
							</div>
							<div class="col-md-4">
								<input name="mail" id="mail" type="text" placeholder="Email">
							</div>
							<div class="col-md-4">
								<input name="tel-number" id="tel-number" type="text" placeholder="Phone">
							</div>
						</div>
						<textarea name="comment" id="comment" placeholder="Message"></textarea>
						<input type="submit" id="submit_contact" value="Send Message">
						<div id="msg" class="message"></div>
					</form>
				</div>
				<div class="col-md-4">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<p>You can contact or visit us in our office from Monday to Friday from 8:00 - 19:00</p>
						<ul class="information-list">
							<li><i class="fa fa-map-marker"></i><span>BookMyAnchors 1<sup style="vertical-align: super; font-size: smaller;">st</sup> Floor 44/3567/A,PK Tower Deshabhimani Road, Kaloor, Cochin 17.</span></li>
							<li><i class="fa fa-phone"></i><span>0484 2539434</span><span>+91-7356001111</span></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">info@bookmyanchors.com</a></li>
						</ul>						
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
		</div>
	</body>
</html>			