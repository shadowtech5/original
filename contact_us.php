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
	<span style="padding-bottom: 10px;">FEEDBACK</span>
		<div class="book-now-style" style=" padding-top: 10px;">   
			<form id="feedback-form" method="post" role="form">
		        <div class="row">
		            <div class="col-md-12">
			            <div class="form-group">
				            <label for="form_name">Firstname *</label>
				            <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
					        <div class="help-block with-errors"></div>
					    </div>
					</div>
				</div>
				<div class="row">
			        <div class="col-md-12">
			    		<div class="form-group">
					        <label for="form_email">Email *</label>
				            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required">
					        <div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
				   	<div class="col-md-12">
						<div class="form-group">
						   	<label for="form_message">Feedback *</label>
					        <textarea id="form_message" name="address" class="form-control" placeholder="Please enter your feedback *" rows="4" required="required" data-error="Please,enter your feedback."></textarea>
					        <div class="help-block with-errors"></div>
					    </div>
					</div>
					<div class="col-md-12" style="padding-bottom: 10px;">
					   	<button id="feedback"type="button" class="btn btn-success btn-send">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
		</div>
	</body>
</html>	