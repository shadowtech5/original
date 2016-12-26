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
		<span>
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
		<?php 
			echo $_COOKIE['user_email']; 
		}
		?>
		</span>
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