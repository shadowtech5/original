<nav class="navbar navbar-inverse">
    <div class="container-fluid">
	    <div class="navbar-header col-md-2">
			<a href="index.php">
				<img src="img/logo.jpg" class="img-responsive">
			</a>
	    </div>
      	<ul class="nav navbar-nav navbar-right">
	        <li>
	        	<?php
					if(!isset($_COOKIE['user_email']))
					{
				?>
	          	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	          	<ul class="dropdown-menu">
		        	<li><a href="login_social_google.php?provider=google"><span class="fa fa-google-plus fa-lg"></span> log in with Google</a></li>
		        </ul>
	          	<?php
					}
					else
					{
				?>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<?php 
						include 'db_connnection.php';

						$sql_login = 'SELECT * from admin where username ="'.$_COOKIE['user_email'].'"';
						$retval_login = mysql_query( $sql_login, $conn );
						if(! $retval_login ) {
							die('Could not get data: ' . mysql_error());
						} 
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
</nav>