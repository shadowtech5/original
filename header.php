<?php
	define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
	require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
	$fb = new Facebook\Facebook([
	  	'app_id' => '1878966485648895',
	  	'app_secret' => '2824d912d645dcafa9a3dc1b6f3f7764',
	  	'default_graph_version' => 'v2.8',
	]);
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; // optional
	$loginUrl = $helper->getLoginUrl('http://qa.bookmyanchors.com/login-callback.php', $permissions);
	if(isset($_COOKIE['user_email']))
	{
		include 'db_connnection.php';

		$sql_login = 'SELECT * from admin where username ="'.$_COOKIE['user_email'].'"';
		$retval_login = mysql_query( $sql_login, $conn );
		if(! $retval_login ) {
			die('Could not get data: ' . mysql_error());
		}
		while($row_redirect = mysql_fetch_array($retval_login, MYSQL_ASSOC)) 
		{
			if ($row_redirect['super_user'])
			{
				header("Location: examples/dashboard.php");
			} 
		}
	}
?>
<style>
body{font-family: raleway;padding-top: 50px;}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #101010;
    background: #222;
}
.nav{
	line-height: 1px;
	font-size: 16px;
	padding-top: 10px;
}
.navbar{
	height: 70px;
}
.navbar-brand>img {
    display: block;
    width: 250px;
    margin-top: -10px;
}
#fixNavbar{
		border-radius:0;
		position:fixed;
		width: 100%;
		left: 0;
		top: 0;
		z-index: 999;
	}
.dropdown-menu{padding-bottom: 4px;}	
</style>
<nav class="navbar navbar-inverse" id="fixNavbar">
    <div class="container-fluid">
	    <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-top: 17px;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
			<img class="img-logo hidden-xs hidden-sm" src="img/logo.png"/>
			<span class="visible-xs visible-sm" style="margin-top: 9px;">BookMyAnchor</span>
		  </a>
	    </div>
	    
	    <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
	        <li><a href="#/">OFFERS</a></li>
	        <li><a href="#">GIFITING</a></li>
	        <li>
	        	<?php
					if(!isset($_COOKIE['user_email']))
					{
				?>
	          	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	          	<ul class="dropdown-menu">
		        	<li><a href="login_social_google.php?provider=google"><span class="fa fa-google-plus fa-lg"></span> Log in with Google</a></li>
		        	<!-- <li><a href="facebook_connect/fbconfig.php"><span class="fa fa-facebook fa-lg"></span> log in with Facebook</a></li> -->
		        	<li><a href="<?php echo $loginUrl; ?>"><span class="fa fa-facebook fa-lg"></span> Log in with Facebook</a></li>
		        </ul>
	          	<?php
					}
					else
					{
				?>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<?php 
						$sql_login = 'SELECT * from admin where username ="'.$_COOKIE['user_email'].'"';
						$retval_login = mysql_query( $sql_login, $conn );
						while($row_login = mysql_fetch_array($retval_login, MYSQL_ASSOC)) 
						{
							echo $row_login['first_name']." ". $row_login['last_name']; 
						}
					?>
					<span class="caret"></span>
				</a>
		        <ul class="dropdown-menu">
		        	<li><a href="#">Dashboard</a></li>
          			<li><a href="#">Profile</a></li>
          			<li><a href="logout.php">Logout</a></li>
		        </ul>
		        <?php
		        	}
		        ?>
	        </li>
	        
      	</ul>
    </div>
   </div>  
</nav>