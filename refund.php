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
		div, textarea, input {
             -moz-box-sizing: border-box;
             -webkit-box-sizing: border-box;
             box-sizing: border-box;
        }

		.container {
  			max-width: 510px;
  			min-width: 324px;
  			margin: 50px auto 0px;
  			background-color: #fff;
  			border: 1px solid #cfcfcf;
  			border-bottom: 3px solid #ccc;
		}

		.row {
  		width: 100%;
  		margin: 0 0 1em 0;
  		padding: 0 2.5em;
		}
		.row.body {
  		padding: .5em 2.5em 1em;
		}
		.pull-right {
  		float: right;
		}

		h1 {
  		font-family: raleway;
		font-weight: 300;
		display: inline-block;
		font-weight: 100;
		font-size: 2.8125em;
		border-bottom: 1px solid rgba(255, 255, 255, 0.3);
		margin: 0 0 0.1em 0;
		padding: 0 0 0.4em 0;
		}

		h3 {
		font-family: raleway;
        font-weight: 400;
        font-size: 1.25em;
        margin: 1em 0 0.4em 0;
        }
		.btn {
  		font-size: 1.0625em;
  		display: inline-block;
  		padding: 0.74em 1.5em;
  		margin: 1.5em 0 0;
  		color: #fff;
  		border-width: 0 0 0 0;
  		border-bottom: 5px solid;
  		text-transform: uppercase;
 		background-color: #b3b3b3;
  		border-bottom-color: #8c8c8c;
  		font-family: raleway;
  		font-weight: 300;
		}
		.btn:hover {
  		background-color: #bfbfbf;
		}
		.btn.btn-submit {
  		background-color: #4f6fad;
  		border-bottom-color: #374d78;
		}
		.btn.btn-submit:hover {
  		background-color: #5f7db6;
		}
		form {
  		max-width: 100%;
  		display: block;
		}
	form ul {
	  margin: 0;
	  padding: 0;
	  list-style: none;
	}
	form ul li {
	  margin: 0 0 0.25em 0;
	  clear: both;
	  display: inline-block;
	  width: 100%;
	}
	form ul li:last-child {
	  margin: 0;
	}
	form ul li p {
	  margin: 0;
	  padding: 0;
	  float: left;
	}
	form ul li p.right {
	  float: right;
	}
	form ul li .req {
	  color: #ee9cb4;
	}
	form label {
	  display: block;
	  margin: 0 0 0.5em 0;
	  color: #4f6fad;
	  font-size: 1em;
	}
	form input {
	  margin: 0 0 0.5em 0;
	  border: 1px solid #ccc;
	  padding: 6px 10px;
	  color: #555;
	  font-size: 1em;
	}
	form textarea {
	  border: 1px solid #ccc;
	  padding: 6px 10px;
	  width: 100%;
	  color: #555;
	}
	form small {
	  color: #4f6fad;
	  margin: 0 0 0 0.5em;
	}

	@media only screen and (max-width: 480px) {
	  .pull-right {
	    float: none;
	  }

	  input {
	    width: 100%;
	  }

	  label {
	    width: 100%;
	    display: inline-block;
	    float: left;
	    clear: both;
	  }

	  li, p {
	    width: 100%;
	  }

	  input.btn {
	    margin: 1.5em 0 0.5em;
	  }

	  h1 {
	    font-size: 2.25em;
	  }

	  h3 {
	    font-size: 1.125em;
	  }

	  li small {
	    display: none;
	  }
	}
</style>
	</head>
	<body>
		<?php include('header.php');?> 
		<div class="container">
			<div class="row header">
				<h2 style="padding-top: 10px;">REFUND /CANCELLATION </h2>
				<h3>Fill out the form below </h3>
			</div>
		<div class="row body">
    		<form action="#">
      			<ul>
        			<li>
	          			<p class="left">
	            			<label for="first_name">Emcee/anchor name</label>
	            			<input type="text" name="anchor name" placeholder="Emcee/anchor name" />
	          			</p>
	          			<p class="pull-right">
	            			<label for="last_name">BMA code</label>
	            			<input type="text" name="bmacode" placeholder="BMA code" />      
	          			</p>
        			</li>
        			<li>
          				<p class="left">
            				<label for="email">Booking Invoice Number <span class="req">*</span></label>
            				<input type="email" name="invoice-number" placeholder="Enter your Booking Invoice Number" />
          				</p>       				
        			</li>        
        			<li>
          				<label for="comments">Reason for Refund</label>
          				<textarea cols="46" rows="3" name="reason-refund"></textarea>
        			</li>
        			<li>
          				<label for="comments">Faulty or other detail</label>
          				<textarea cols="46" rows="3" name="other-details"></textarea>
        			</li>
        			<li>
          				<input class="btn btn-submit" type="submit" value="Submit" />
        			</li>
         		</ul>
    		</form>  
  		</div>
  		<div class="row">

  		</div>
  	</div>	
		<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
		</div>
	</body>
</html>	