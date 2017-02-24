<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/title-logo.png" />
	<link rel="icon" type="image/png" href="../assets/img/title-logo.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Bookmyanchors</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/fullcalendar.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/fullcalendar.min.js"></script> 
	<style type="text/css">
		.hide{
			display: none;
		}
		.modal{
			display: block;
		}
	</style>   
	<script>

		$(document).ready(function() {
			$('#calendar').fullCalendar({
    			dayClick: function(date) {
        	
        		// alert('Clicked on: ' + date.format());
        		$('.modal-body').append('<input id="offline_date" type="hidden" name="offline_date" value='+date.format()+'>');
        		$('#myModal').removeClass('hide');
        		// $('#calendar_modal').show();
    			}
    		});
    		$('#modal_close').click(function(){
    			$('#myModal').addClass('hide');
    			$("#offline_date").remove();
    		});
    		$("#offline_submit_button").click(function(e){
    			var frm = $('#offline_form');
		        e.preventDefault;
		        $.ajax({
		            url: 'offline.php',
		            type: 'POST',
		            data: frm.serialize(),
		            success: function (data) 
		            {
		                alert("svdjfbsjd");
		            }
		        });
    		});	
		});

	</script>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<?php 
				include('dashboard_menus.php');
			?>
	    </div>


	    <div class="main-panel">

	    	<?php 
				include('dashboard_header.php');
			?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Calender</h4>
	                                <p class="category">To Check ON/OFF/BUSY Mode</p>
	                            </div>
	                            <div class="card-content">
									<div id="calender">
										<div class="title">
											<h2>On/Off/Busy</h2>
										</div>
										<div class="row">
											<div id="calendar"></div>
										</div>
									</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- sample modal -->

	<!-- Modal -->
	<div id="myModal" class="modal hide">
		<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<form id="offline_form">
				<div class="modal-body">
					<select class="form-control" name="offline_option">
						<option>Online</option>
						<option>Offline</option>
						<option>Busy</option>
					</select>
				</div>
				<div class="modal-footer">
					<button id="offline_submit_button" type="button" class="btn btn-default">Submit</button>
					<button type="button" class="btn btn-default" id="modal_close">Close</button>
				</div>
			</form>
		</div>

		</div>
	</div>

	<!-- <div id="calendar_modal" class="modal"> 
		<select>
			<option>Online</option>
			<option>Offline</option>
			<option>Busy</option>
		</select>
		<button type="button" class="btn btn-default" id="close_button_calendar_modal">Close</button>
	</div> -->
	<!-- ends sample modal -->

</body>

	<!--   Core JS Files   -->
	
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>
	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>
	
</html>
