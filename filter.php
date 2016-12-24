<?php 
	session_start();
	// if(!isset($_SESSION['login_user'])) { 
	//   header("Location: login.php");
	// }
	if(!isset($_COOKIE['ev_id']))
	{
		if($_GET['ev_id'])
		{
			$ev_id=$_GET['ev_id'];
			setcookie("ev_id", $ev_id, time() + 3600);  
		}
		else
		{
			header("Location: index.php");
		}
	}
	include 'db_connnection.php';

	$event_type = $_POST['event_type'];
	$min_price = "1";
	$max_price = $_POST['price'];
	$min_members = "1";
	$max_members = $_POST['performing_members'];
	$sql = "select * from B_ANCHOR_DETAILS where";
	$sql = $sql . "(price between " . $min_price . " and " .  $max_price . " ) and";
	$sql = $sql . "(anchor_performing_team between " . $min_members . " and " .  $max_members . ")";
	$flag_status = True;

	if (isset($_POST['online'])){
		$sql = $sql. "and (status = 'online'";
		if (isset($_POST['offline'])){
			$flag_status = False;
			$sql = $sql. "or status = 'ofline')";
		}
		else{
			$sql = $sql. ")";
		}
	}

	if ($flag_status)
	{
		if (isset($_POST['offline'])){
			$sql = $sql. "and (status = 'ofline')";
		}
	}


	$flag_gender = True;

	if (isset($_POST['male'])){
		$sql = $sql. "and (gender = 'male'";
		if (isset($_POST['female'])){
			$flag_status = False;
			$sql = $sql. "or gender = 'female')";
		}
		else{
			$sql = $sql. ")";
		}
	}

	if ($flag_gender)
	{
		if (isset($_POST['female'])){
			$sql = $sql. "and (gender = 'female')";
		}
	}
	$retval = mysql_query( $sql, $conn );

	if(! $retval ) 
	{
		die('Could not get data: ' . mysql_error());
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php ob_start(); ?>
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
	    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
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
				<div class="carousel-inner landing-page-carousel" role="listbox">
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

			<!-- filter container -->
			<div class="col-md-12 container-fluid">
				<div class="col-md-12 container-fluid filter-options">
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">PRICE RANGE</a>
					</div>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">AVAILABLE</a>
					</div>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">GENDER</a>
					</div>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">PERFORMING MEMBERS</a>
					</div>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">EVENT TYPE</a>
					</div>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-filter"></span> <a class="filter">LANGUAGES</a>
					</div>
				</div>
				<div class="col-md-12 container-fluid filter-options-details">
					<form action="filter.php" method="post">
						<div class="col-md-2">
							<input id="price" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20000" data-slider-step="1" data-slider-value="7000" class="form-control" name="price" />
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="online">  Online</input>
							<br>
							<input type="checkbox" name="offline">  Offline</input>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="male">  Male</input>
				            <br/>
				            <input type="checkbox" name="female">  Female</input>
						</div>
						<div class="col-md-2">
							<input id="performing_members" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="6" data-slider-step="1" data-slider-value="4" class="form-control" name="performing_members" />
						</div>
						<div class="col-md-2">
							<select class="form-control" name="event_type">
							<?php 
								$event_sql = 'SELECT * from M_EVENT_TYPE';
								$event_retval = mysql_query( $event_sql, $conn );
								if(! $event_retval ) 
								{
									die('Could not get data: ' . mysql_error());
								}
								while($event_row = mysql_fetch_array($event_retval, MYSQL_ASSOC)) 
								{
	              			?>
	              				<option value=<?php echo "{$event_row['event_type']}"; ?>><?php echo "{$event_row['event_type']}"; ?></option>
	              			<?php
	              				}
	              			?>
	              			</select>
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="english">English</input><br>
				            <input type="checkbox" name="malayalam">Malayalam</input><br>
				            <input type="checkbox" name="tamil">Tamil</input><br>
				            <input type="checkbox" name="kanada">Kanada</input><br>
				            <input type="checkbox" name="punjabi">Punjabi</input><br>
				            <input type="checkbox" name="telugu">Telugu</input><br>
				            <input type="checkbox" name="marati">Marathi</input>
						</div>
						<div class="col-md-12 text-center">
							<button type="submit">Done</button>
						</div>
					</form>
				</div>
			</div>
			<!-- ends filter container -->
			<?php
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
				{
					$dp = $row['image_path'].'main.jpg"';
					$status = 'glyphicon glyphicon-record right '.$row['status'];
			?>
			<!-- profile shows -->
			<div class="col-md-4">
				<div class="profile-outer-container">
					<div class="profile-content-container container-fluid">
						<div class="profile-image-container col-md-6">
							<img src=<?php echo $dp; ?> class="img-responsive">
						</div>
						<div class="col-md-6 profile-content-main-outer">
							<div class="profile-content">
								<span><?php echo "{$row['anchor_name']}"; ?></span> 
								<span class="<?php echo $status;?>"></span>
								<br>
								<!-- designation query -->
								<?php
									$sql = 'SELECT * from ANCHOR_CATEGORY_CONNECTER where anchor_id='.$row['anchor_id'];
									$retval2 = mysql_query( $sql, $conn );

									if(! $retval2 ) 
									{
										die('Could not get data: ' . mysql_error());
									}

									while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC)) 
									{
										$sql = 'SELECT * from anchor_category where category_id='.$row2['category_id'];
										$retval3 = mysql_query( $sql, $conn );

										if(! $retval3 ) 
										{
											die('Could not get data: ' . mysql_error());
										}
										while($row3 = mysql_fetch_array($retval3, MYSQL_ASSOC)) 
										{
								?>
								<span><?php echo "{$row3['category']}". " /"; ?></span>
								<?php
										}
									}
								?>
								<br>
									<?php
										for($i=0; $i<$row['rating']; $i++)
										{
										?>
										<span class="glyphicon glyphicon-star golden"></span>
										<?php
										}
									?>
								<br>
								<span class="glyphicon glyphicon-map-marker"></span>
								<span> <?php echo "{$row['anchor_place']}"; ?></span>
							</div>
							<div class="col-md-12 profile-links-container">
								<div class="col-md-6">
									<span>Check Availability</span>
								</div>
								<div class="col-md-6">
									<span><a href="view_profile.php?ac_id=<?php echo"{$row['anchor_id']}";?>">ViewProfile</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<button class="right">Book Now</button>
						</div>
					</div>

				</div>
			</div>
			<!-- ends profile shows -->
			<?php
				}
			?>

		</div>
	</body>
</html>