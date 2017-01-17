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
	if(strpos($_SERVER['REQUEST_URI'], "landingpage.php?ev_id="))
	{
		$sql = 'SELECT * from B_ANCHOR_DETAILS';
	}
	elseif(strpos($_SERVER['REQUEST_URI'], "landingpage.php?searching"))
	{
		if(isset($_POST['event_type']))
		{
			$event_type = $_POST['event_type'];
			$min_price = $_POST['min_price'];
			$max_price = $_POST['max_price'];
			$min_members = $_POST['min_members'];
			$max_members = $_POST['max_members'];
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
					$flag_gender = False;
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
			$flag_english = True;
			$flag_malayalam = True;
			$flag_tamil = True;
			$flag_kanada = True;
			$flag_panjabi = True;
			$flag_telugu = True;
			$flag_marati = True;
			//language filter for english
			if($flag_english)
			{
				if(isset($_POST['english']))
				{
					$sql = $sql. "and (anchor_language like '%english%'";
					$flag_english = False;
					if(isset($_POST['malayalam']))
					{
						$flag_malayalam = False;
						$sql = $sql. "or anchor_language like '%malayalam%'";
						if(isset($_POST['tamil']))
						{
							$flag_tamil = False;
							$sql = $sql. "or anchor_language like '%tamil%'";
							if(isset($_POST['kanada']))
							{
								$flag_kanada = False;
								$sql = $sql. "or anchor_language like '%kanada%'";
								if(isset($_POST['panjabi']))
								{
									$flag_panjabi = False;
									$sql = $sql. "or anchor_language like '%panjabi%'";
									if(isset($_POST['telugu']))
									{
										$flag_telugu = False;
										$sql = $sql. "or anchor_language like '%telugu%'";
										if(isset($_POST['marati']))
										{
											$flag_marati = False;
											$sql = $sql. "or anchor_language like '%marati%'";
										}
									}
								}
							}
						}

					}
					if($flag_english == False)
					{
						$sql = $sql.")";
					}
				}
			}
			//ends english language filter

			//langage filter malayalam
			if($flag_malayalam)
			{
				if(isset($_POST['malayalam']))
				{
					$sql = $sql. "and (anchor_language like '%malayalam%'";
					$flag_malayalam = False;
					if(isset($_POST['tamil']))
					{
						$flag_tamil =False;
						$sql = $sql. "or anchor_language like '%tamil%'";
						if(isset($_POST['kanada']))
						{
							$flag_kanada = False;
							$sql = $sql. "or anchor_language like '%kanada%'";
							if(isset($_POST['panjabi']))
							{
								$flag_panjabi = False;
								$sql = $sql. "or anchor_language like '%panjabi%'";
								if(isset($_POST['telugu']))
								{
									$flag_telugu = False;
									$sql = $sql. "or anchor_language like '%telugu%'";
									if(isset($_POST['marati']))
									{
										$flag_marati = False;
										$sql = $sql. "or anchor_language like '%marati%'";
									}
								}
							}
						}
					}
					if($flag_malayalam == False)
					{
						$sql = $sql.")";
					}
				}
			}
			//ends malayalam language filter
			//language filter tamil
			if($flag_tamil)
			{
				if(isset($_POST['tamil']))
				{
					$sql = $sql. "and (anchor_language like '%tamil%'";
					$flag_tamil = False;
					if(isset($_POST['kanada']))
					{
						$flag_kanada = False;
						$sql = $sql. "or anchor_language like '%kanada%'";
						if(isset($_POST['panjabi']))
						{
							$flag_panjabi = False;
							$sql = $sql. "or anchor_language like '%panjabi%'";
							if(isset($_POST['telugu']))
							{
								$flag_telugu = False;
								$sql = $sql. "or anchor_language like '%telugu%'";
								if(isset($_POST['marati']))
								{
									$flag_marati = False;
									$sql = $sql. "or anchor_language like '%marati%'";
								}
							}
						}
					}
					if($flag_tamil == False)
					{
						$sql = $sql.")";
					}
				}
			}
			
			//ends tamil
			if($flag_kanada)
			{
				if(isset($_POST['kanada']))
				{
					$sql = $sql. "and (anchor_language like '%kanada%'";
					$flag_kanada = False;
					if(isset($_POST['panjabi']))
					{
						$flag_panjabi = False;
						$sql = $sql. "or anchor_language like '%panjabi%'";
						if(isset($_POST['telugu']))
						{
							$flag_telugu = False;
							$sql = $sql. "or anchor_language like '%telugu%'";
							if(isset($_POST['marati']))
							{
								$flag_marati = False;
								$sql = $sql. "or anchor_language like '%marati%'";
							}
						}
					}
					if($flag_kanada == False)
					{
						$sql = $sql.")";
					}
				}
			}
			if($flag_panjabi)
			{
				if(isset($_POST['panjabi']))
				{
					$sql = $sql. "and(anchor_language like '%panjabi%'";
					$flag_panjabi = False;
					if(isset($_POST['telugu']))
					{
						$flag_telugu = False;
						$sql = $sql. "or anchor_language like '%telugu%'";
						if(isset($_POST['marati']))
						{
							$sql = $sql. "or anchor_language like '%marati%'";
						}
					}
					if($flag_panjabi == False)
					{
						$sql = $sql.")";
					}
				}
			}
			if($flag_telugu)
			{
				if(isset($_POST['telugu']))
				{
					$sql = $sql. "and (anchor_language like '%telugu%'";
					$flag_telugu = False;
					if(isset($_POST['marati']))
					{
						$flag_marati = False;
						$sql = $sql. "or anchor_language like '%marati%'";
					}
					if($flag_telugu == False)
					{
						$sql = $sql.")";
					}
				}
			}
			if($flag_marati)
			{
				if(isset($_POST['marati']))
				{
					$sql = $sql. "and (anchor_language like '%marati%')";
				}
			}
		}
		else
		{
			$sql = 'SELECT * from B_ANCHOR_DETAILS';
		}
	}
	elseif(strpos($_SERVER['REQUEST_URI'], "landingpage.php?search"))
	{
		$sql = "SELECT * from B_ANCHOR_DETAILS where bma_code like '%".$_POST["bma_code"]."%' or anchor_name like '%".$_POST["bma_code"]."%'";
	}
	else{
		$sql = 'SELECT * from B_ANCHOR_DETAILS';
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
		<title>bookmyanchors</title>
		<link rel="icon" type="image/png" href="img/logo/title-logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
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
	    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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
			#myCarousel{
				/*height: 500px;*/
				width: 100%;
			}
			.nav-fltr-text{
				font-size: 20px;
				font-family: raleway;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			.subfltr-text{
				font-size: 17px; 
				font-family: raleway;
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
		<!-- Javascript -->
      <script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 100000,
               values: [ 5000, 7000 ],
               slide: function( event, ui ) {
                  $( "#price1" ).val(ui.values[ 0 ]);
                  $( "#price2" ).val(ui.values[ 1 ]);
               }
           });
         $( "#price1" ).val($( "#slider-3" ).slider( "values", 0 ));
         $( "#price2" ).val($( "#slider-3" ).slider( "values", 1 ));
         });

         $(function() {
            $( "#slider-4" ).slider({
               range:true,
               min: 1,
               max: 6,
               values: [ 1, 6 ],
               slide: function( event, ui ) {
                  $( "#price3" ).val(ui.values[ 0 ]);
                  $( "#price4" ).val(ui.values[ 1 ]);
               }
           });
         $( "#price3" ).val($( "#slider-4" ).slider( "values", 0 ));
         $( "#price4" ).val($( "#slider-4" ).slider( "values", 1 ));
         });
      </script>
	</head>
	<body>
		<div class="social-container1 hide">
			<div class="col-md-12 container-fluid light-black">
				<!-- icon bar -->
				<div class="container-fluid light-black icon-container col-md-12">
					<div class="col-md-4 logo">
						<a href="index.php">
						<img src="img/logo.png" class="img-responsive">
						</a>
					</div>
					<div class="col-md-8  Search-box">
						<div class="input-group stylish-input-group">
	            			<input type="text" class="form-control"  placeholder="Search with name or bma code" >
			        			<span class="input-group-addon">
		                			<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
	                    			</button>  
	                			</span>
	        			</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="container-fluid background_image img-responsive img-responsive">
			<!-- social media bar -->
			<?php include('header.php');?>
			<!-- ends social media bar -->

			<!-- slider -->
			<div class="landingpagebanner">
				<img src="img/landing-page-banner.jpg" class="img-responsive">
			</div>
			<!-- ends slider -->
					
			<div class="row">
      			<div class="col-sm-3 sidenav">
        			<form action="landingpage.php?searching" method="post">
        				<p style="font-family: raleway; font-size: 24px; padding-top: 10px; padding-bottom: 10px;" class="text-center">Filter By</p>
          				<div class="price-container" style="margin-left: 10px;">
            				<h4 class=" nav-fltr-text">Price Range</h4>
            					<input type="text" id="price1" name="min_price" class="form-control text-center">
              					<div id="slider-3"></div>
            					<input type="text" id="price2" name="max_price" class="form-control text-center">
          				</div>
          				<div class="subfltr-text">
            				<h4 class="nav-fltr-text" style="margin-left: 10px;">Available</h4>
            					<input type="checkbox" name="online" style="margin-left: 10px;">Online 
            					<input type="checkbox" name="offline" style="margin-left: 13px;">Offline
          				</div>
          				<div class="subfltr-text">
            				<h4 class="nav-fltr-text" style="margin-left: 10px;">Gender</h4>
					            <input type="checkbox" name="male" style="margin-left: 10px;">Male
					            <input type="checkbox" name="female" style="margin-left: 18px;">Female
          				</div>
          				<div class="subfltr-text" style="margin-left: 10px;">
				            <h4 class="nav-fltr-text">Performing Members</h4>
				            	<input type="text" id="price3" name="min_members" class="form-control text-center">
				             	<div id="slider-4"></div>
				            	<input type="text" id="price4" name="max_members" class="form-control text-center">
				        </div>
          				<div class="subfltr-text">
            					<h4 class="nav-fltr-text" style="margin-left: 10px;">Event Type</h4>
            					<select class="form-control" name="event_type"  style="margin-left: 10px;">
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
            					</select>
          				</div>
          				<div class="subfltr-text">
				            <h4 class="nav-fltr-text" style="margin-left: 10px;">Languages</h4>
				            <input type="checkbox" name="english" style="margin-left: 15px;">English</input>
				            <input type="checkbox" name="malayalam" style="margin-left: 15px;">Malayalam</input>
				            <input type="checkbox" name="tamil" style="margin-left: 10px;">Tamil</input><br>
				            <input type="checkbox" name="kanada" style="margin-left: 15px;">Kanada</input>
				            <input type="checkbox" name="punjabi" style="margin-left: 13px;">Punjabi</input>
				            <input type="checkbox" name="telugu" style="margin-left: 38px;">Telugu</input><br>
				            <input type="checkbox" name="marati" style="margin-left: 15px;">Marathi</input>
          				</div>
          				<br/><br/>
          				<div class="text-center col-md-12"  style="margin-left: 10px;">
            				<button class="btn btn-primary" type="submit">Apply Filter</button>
          				</div>
        			</form>
      			</div>
			<!-- ends -->
			<div class="col-sm-9 real_anchor_tab">
			<!-- menu bar starts -->
				<!-- <div class="row celeb-profile-menu-bar">
					<div class="col-md-6">
						<span><a  class="active real_anchor" style="padding: 20px;">Anchor</a></span>
						<span><a  class="celebrity-anchor" style="margin-left: 25px;padding: 20px;">Celebrity Anchor</a></span>
					</div>
				</div>	 -->
				<div id="cssmenu">
					<ul>
					   <li class="active"><a class="active real_anchor" href="#">Anchor</a></li>
					   <li class="celebrity-anchor"><a class="celebrity-anchor" href="#">Celebrity Anchor</a></li>
					</ul>
				</div>

			<!-- ends menu bar -->
				
				<?php
					if(mysql_num_rows($retval)>0)
					{
						while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
						{
							$dp = $row['image_path'].'main.jpg"';
							$status = 'glyphicon glyphicon-record right '.$row['status'];
				?>
			<!-- profile shows -->
					<div class="col-md-6">
						<div class="profile-outer-container">
							<div class="profile-content-container container-fluid">
								<div class="profile-image-container col-md-6">
									<img src=<?php echo $dp; ?> class="img-responsive">
								</div>
								<div class="col-md-6 profile-content-main-outer">
									<div class="profile-content">
										<span class="anchor_name_inner"><?php echo "{$row['anchor_name']}"; ?></span> 
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
										<br>
										<span>BMA Code: </span>
										<span> <?php echo "{$row['bma_code']}"; ?></span>
									</div>
									<?php
										$name = str_replace(' ', '', $row['anchor_name']);
										$name_link = $name."_link";
										$price_contianer = "price_container_".$name;
										$anchor_booking_container = "container col-md-12 hide ". $name. "_booking_container";
									?>	
								</div>
								<!-- <div class="col-md-12">
									<button class="right">Book Now</button>
								</div> -->
								<div class="landingpage_buttons_container">
									<div class="col-md-6 landingpage_buttons">
										<a href="#" class="<?php echo $name_link;?>">
											<button class="btn btn-info col-md-12">Check Availability</button>
										</a>
									</div>
									<div class="col-md-6 landingpage_buttons">
										<a href="view_profile.php?ac_id=<?php echo"{$row['anchor_id']}";?>">
											<button class="btn btn-info col-md-12">ViewProfile</button>
										</a>
									</div>
								</div>
								
								<?php 
									$check_available = "col-md-12 " . $name;
								?>
								<div class="<?php echo $check_available;?>">
									<div>
										<?php 
											$form_name = "check_available_form_".$name;
											$check_available_form_contents = "check_available_form_contents_".$name;
										?>
										<form id=<?php echo $form_name ?> method="POST">
											<div class="<?php echo $check_available_form_contents; ?>">
												Event date:<input type="date" name="" class="form-control">
												<span>Duration: Hours &amp; Miniutes</span>
												<br>
												<select class="form-control time left" name="hour">
						              			<?php 
						              				for($i=0;$i<=24;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
												</select>
												<select class="form-control time" name="hour">
						              			<?php 
						              				for($i=0;$i<=60;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
												</select>
												<input type="hidden" name="anchor_id" value=<?php echo "{$row['anchor_id']}"; ?>>
											</div>
											<div class="<?php echo $price_contianer; ?>"></div>
											<?php
												$button_name = "check_available_form_button_".$name;
											?>
											<button type="button" class="btn btn-info col-md-12" id="<?php echo $button_name; ?>">Check available</button>
							            </form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ends profile shows -->

					
					
					<style type="text/css">
						.<?php echo $price_contianer; ?>{
							display: none;
						}
						.<?php echo $check_available_form_contents; ?>{
							display: none;
						}
						.<?php echo $name;?>{
							display: none;
						}
						#<?php echo $button_name;?>{
							margin-top: 5px;
							margin-bottom: 5px;
						}
					</style>
					<script type="text/javascript">
						<?php
							$main_class = '".'.$name_link.'"';
							$show_class = '".'.$name.'"';
							// $price_contianer = '".'.$price_contianer.'"';
							// $check_available_form_contents = '".'.$check_available_form_contents.'"';
							$close_container = $name. "_booking_container";


						?>
						$(document).ready(function(){
							$(".<?php echo $name;?>_close_booking").click(function(e){
								$(".<?php echo $close_container;?>").addClass("hide");
							});
							$(<?php echo $main_class;?>).click(function(){
						        console.log("test22");
						        $(<?php echo $show_class;?>).slideToggle("slow");
						        $('.<?php echo $price_contianer;?>').empty();
						        $("#<?php echo $button_name;?>").show();
		                		$('.<?php echo $check_available_form_contents;?>').show();
						    });
						    $("#<?php echo $button_name;?>").click(function (e) {
						        console.log("fdjg");
						        // this.disabled = true;
						        $("<?php echo $button_name;?>").hide();
						        var frm = $('#<?php echo $form_name; ?>');
						        $.ajax({
						            url: 'check_available.php',
						            type: 'POST',
						            data: frm.serialize(),
						            success: function (data) {
						                $('.<?php echo $price_contianer;?>').append(data).show(); // appending data response to result-page div
						                $('.<?php echo $check_available_form_contents;?>').hide();  //hiding form
						                $('#<?php echo $button_name;?>').hide();
						            }
						        });
						    });
						});
					</script>
						<?php
								}
							}
							else
							{
								echo "no data";
							}

						?>
						</style>
					</div>
					<div class="col-sm-9 celebrity-anchor_tab hide">
						<!-- menu bar starts -->
						<div id="cssmenu">
							<ul>
							   <li><a class="real_anchor" href="#">Anchor</a></li>
							   <li class="active celebrity-anchor"><a class="active celebrity-anchor" href="#">Celebrity Anchor</a></li>
							</ul>
						</div>

						<?php
						$sql = "select * from celebrity_anchors";
						$retval = mysql_query( $sql, $conn );

						if(! $retval ) 
						{
							die('Could not get data: ' . mysql_error());
						}

							while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
							{
								$dp = $row['image_path'].'main.jpg"';
						?>
			<!-- profile shows -->
					<div class="col-md-6">
						<div class="profile-outer-container">
							<div class="profile-content-container container-fluid">
								<div class="profile-image-container col-md-6">
									<img src=<?php echo $dp; ?> class="img-responsive">
								</div>
								<div class="col-md-6 profile-content-main-outer">
									<div class="profile-content">
										<span class="anchor_name_inner"><?php echo "{$row['anchor_name']}"; ?></span>
										<br>
										<?php
											$sql = 'SELECT * from cele_category_connecter where anchor_id='.$row['id'];
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
									</div>
									<?php
										$name = str_replace(' ', '', $row['anchor_name']);
										$name_link = $name."_link";
										$price_contianer = "price_container_".$name;
										$anchor_booking_container = "container col-md-12 hide ". $name. "_booking_container";
									?>	
								</div>
								<!-- <div class="col-md-12">
									<button class="right">Book Now</button>
								</div> -->
								<div class="landingpage_buttons_container">
									<div class="col-md-6 landingpage_buttons">
										<a href="celc_book_now.php?ac_id=<?php echo"{$row['id']}";?>">
											<button class="btn btn-info col-md-12">Book Now</button>
										</a>
									</div>
									<div class="col-md-6 landingpage_buttons">
										<a href="cele_viewprofile.php?ac_id=<?php echo"{$row['id']}";?>">
											<button class="btn btn-info col-md-12">ViewProfile</button>
										</a>
									</div>
								</div>								
								<?php 
									$check_available = "col-md-12 " . $name;
								?>
								<div class="<?php echo $check_available;?>">
									<div>
										<?php 
											$form_name = "check_available_form_".$name;
											$check_available_form_contents = "check_available_form_contents_".$name;
										?>
										<form id=<?php echo $form_name ?> method="POST">
											<div class="<?php echo $check_available_form_contents; ?>">
												Event date:<input type="date" name="" class="form-control">
												<span>Duration: Hours &amp; Miniutes</span>
												<br>
												<select class="form-control time left" name="hour">
						              			<?php 
						              				for($i=0;$i<=24;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
												</select>
												<select class="form-control time" name="hour">
						              			<?php 
						              				for($i=0;$i<=60;$i++)
						              				{
						              			?>
						              				<option value=<?php echo (string)$i;  ?>><?php echo $i;  ?></option>
						              			<?php
						              				}
						              			?>
												</select>
												<input type="hidden" name="anchor_id" value=<?php echo "{$row['anchor_id']}"; ?>>
											</div>
											<div class="<?php echo $price_contianer; ?>"></div>
											<?php
												$button_name = "check_available_form_button_".$name;
											?>
											<button type="button" class="btn btn-info col-md-12" id="<?php echo $button_name; ?>">Check available</button>
							            </form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ends profile shows -->

					
					
					<style type="text/css">
						.<?php echo $price_contianer; ?>{
							display: none;
						}
						.<?php echo $check_available_form_contents; ?>{
							display: none;
						}
						.<?php echo $name;?>{
							display: none;
						}
						#<?php echo $button_name;?>{
							margin-top: 5px;
							margin-bottom: 5px;
						}
					</style>
					<script type="text/javascript">
						<?php
							$main_class = '".'.$name_link.'"';
							$show_class = '".'.$name.'"';
							// $price_contianer = '".'.$price_contianer.'"';
							// $check_available_form_contents = '".'.$check_available_form_contents.'"';

						?>
						$(document).ready(function(){
							$(<?php echo $main_class;?>).click(function(){
						        console.log("test22");
						        $(<?php echo $show_class;?>).slideToggle("slow");
						        $('.<?php echo $price_contianer;?>').empty();
						        $("#<?php echo $button_name;?>").show();
		                		$('.<?php echo $check_available_form_contents;?>').show();
						    });
						    $("#<?php echo $button_name;?>").click(function (e) {
						        console.log("fdjg");
						        // this.disabled = true;
						        $("<?php echo $button_name;?>").hide();
						        var frm = $('#<?php echo $form_name; ?>');
						        $.ajax({
						            url: 'check_available.php',
						            type: 'POST',
						            data: frm.serialize(),
						            success: function (data) {
						                $('.<?php echo $price_contianer;?>').append(data).show(); // appending data response to result-page div
						                $('.<?php echo $check_available_form_contents;?>').hide();  //hiding form
						                $('#<?php echo $button_name;?>').hide();
						            }
						        });
						    });
						});
					</script>
						<?php
							}
						?>
						</style>

						<!-- ends menu bar -->
					</div>
				</div>
			<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
			</div>
		</div>
	</body>
</html>