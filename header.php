<div class="container-fluid light-white social-container">
	<div class="col-md-4 logo">
		<img src="img/logo.png" class="img-responsive">
	</div>
	<div class="menu-list">
		<span><a href="">OFFERS</a></span>
		<span><a href="">GIFITING</a></span>
		<span><a href="">SUPPORT</a></span>
		<span class="">
		<?php
		if(!isset($_COOKIE['user_email']))
		{
		?>
			<span class="glyphicon glyphicon-user"></span><a class="sign_button">SIGN IN</a>
		<?php
		}
		else
		{
		?>
		<span class="glyphicon glyphicon-user"></span>
		<span></span>
		<ul class="profile_details">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<?php 
						include 'db_connnection.php';

						$sql = 'SELECT * from admin where username ="'.$_COOKIE['user_email'].'"';
						$retval = mysql_query( $sql, $conn );
						if(! $retval ) {
							die('Could not get data: ' . mysql_error());
						} 
						while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
						{
							echo $row['first_name']." ". $row['last_name']; 
						}
					?>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
          			<li><a href="#">Dashboard</a></li>
          			<li><a href="#">Profile</a></li>
          			<li><a href="logout.php">Logout</a></li>
          		</ul>
          	</li>
        </ul>
		</span>
		<?php
		}
		?>
	</div>
	<!-- login box -->
		<div class="login-box text-center container-fluid col-md-6 right">
			<div class="social-login col-md-12 text-center">
					<!-- <a href="#">
			        <i class="fa fa-facebook fa-lg"></i>
			        Login in with facebook
					</a> -->
					<a href="login_social_google.php?provider=google">
					<i class="fa fa-google-plus fa-lg"></i>
					log in with Google
					</a>
			</div>
		</div>
	<!-- end -->
</div>