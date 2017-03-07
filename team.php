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
			@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 45%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}
body{
    overflow-x: hidden;
}
.pic-image{
    height: 300px;
    overflow: hidden;
}
		</style>
	</head>
	<body>
		<?php include('header.php');?>
		<div class="row">
            <div class="heading-title text-center">
                <h3 class="text-uppercase">Our Team </h3>
        </div>             
		<div class="col-md-3 col-sm-3">
            <div class="team-member pic-image">
                <div class="team-img">
                    <img src="img/team/siraj.jpeg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">                   
                        <p>A Young energetic, hard working and enthusiastic man with high end talents especially in events and other related activities.  His wide experience of 9 years in event industry motivated him to innovate this company and his aim is to reach national and international level to acclaim book my anchors</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                </div>
                <div class="team-title">
                    <h5>Siraj CA</h5>
                    <span>Managing Director</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <div class="team-member pic-image">
                <div class="team-img">
                    <img src="img/team/sulfi.jpeg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">                   
                        <p>An eminent businessman who owns business worldwide with an aim to start a new venture at Kochi.  Always keen in business and pride that he owns a golden touch in all trade entered.</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                </div>
                <div class="team-title">
                    <h5>Sulfi</h5>
                    <span>Director</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <div class="team-member pic-image">
                <div class="team-img">
                    <img src="img/team/Fahd.jpeg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">                   
                        <p>A professional in software system and network engineering experience more than a decade.  His skills can be make use of to the utmost level, an active young, talented  and wholehearted man who extend support always to the team</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                </div>
                <div class="team-title">
                    <h5>Fahd Latheef</h5>
                    <span>Executive Director</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <div class="team-member pic-image">
                <div class="team-img">
                    <img src="img/team/nabeel.jpeg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">                   
                        <p>A Businessman of his own style with innovative ideas and motivated a lot to this industry.  His aim is to bring up utmost level and reach worldwide services of industry to attain goodwill</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                </div>
                <div class="team-title">
                    <h5>Nabeel Ezinan</h5>
                    <span>Director Chief</span>
                </div>
            </div>
		<div class="col-md-12 container-fluid footer-dynamic-block">
			<?php
				include 'footer.php';
			?>
		</div>
	</body>
</html>			