<!-- -->
<!DOCTYPE html>
<html>
	<head>
		<title>Sea Side South Park </title>
		   <title>Knignt's Luxury</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Bootstrap stylesheet-->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">

	<!-- Bootstrap JS File-->
	<script src="Bootstrap/js/jquery.min.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="font/css/font-awesome.min.css">

	<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>



		<style>
			html, body {
			margin:0;
			padding:0;
			font-family: 'Raleway', sans-serif;
			}
			#pictureLogo {
			position: absolute;
			left: 0px;
			top: 0px;
			z-index: -1;
			width:100%;
			height:500px;

			}
			.full-body{
			min-height:420px;
			margin-top: 300px;
			<!--background: #FFB;-->
			}
			.container{
			width: 1170px;
			<!-- background: #FFB; -->
			min-height: 420px;
			margin: 0 auto;

			}
			.page {

			}
			.rooms-and-suites-header {
			text-align: center;
			margin: 55px auto 70px;
			}
			.rooms-and-suites-header h3 {
				color: #88898a;
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 40px;
				margin-bottom: 0px;
				padding-top: 72px;
			}

			.rooms-and-suites-header h1 {
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 50px;
				margin-top: 0px;
			}

			.rooms-and-suites-header p {
				color: #212020;
				font-size: 17px;
				line-height: 26px;
				margin: 30px auto;
				max-width: 800px;
			}
			ul.rooms-and-suites {
				position: relative;
				display: block;
				margin: 0px -5px 30px;
				list-style: none;
			}
			ul.rooms-and-suites > li {
				float: left;
				display: block;
				width: 50%;
				padding: 0px;
				margin: 0px;

			}
			.footer {
				background: black;
				color: wheat;
				/* margin-top: -59px; */
				padding: 20px;
				padding-bottom: 5px;
				border-bottom: 1px solid green;
			}
			a {text-decoration: none;
				color: #ffde7e;
				text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
				font-size: 18px;
			}
			a:hover {
			color:green;
			font-weight: bold;
			}
			.navcontainer {
			width:1170px;
			margin:0 auto;
			margin-left: 105px;
			}
			#header .logo {
				position: relative;
				display: block;
				margin: 0 auto 10px;
				width: 30px;
				float: left;
				margin-top: -45px;
				margin-left: -89px;

			}
			#header .logo img {
				max-height: 145px;
			}
			#header .main-nav {
				 position: relative;
				display: inline-flex;
				text-align: center;
				list-style-type: none;
				padding: 10px 0px;
				margin-left: 60px;
				margin-top: 14px;
			}

			.inner-top {
			/*min-height: 50px; */
			/*background-color: #000; */
			/* padding-top: 12px; */
			padding: 20px;
			background: black;
			}
			#header {
			background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);
			}


			.container {

			font-family: 'Raleway', sans-serif;
			width: 800px;
			margin:0 auto;
			background: white;

			padding:20px;
			min-height:700px;
			border-radius: 10px;
			border-style: solid;
			border-color: green;

			}
			/* first Image */
			.items {
				position:relative;
				height: 518px;margin: 5px;width: 50%;float: left;

				overflow:hidden;
			}
			.items img {

				height: 515px;margin: 5px;width: 50%;float: left;
			}
			.shadow {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items:hover .shadow {
				top:0;
				margin: 5px;

			}


			/* Last Image same as First */
			.items8 {
				position:relative;
				height: 515px;margin: 5px;width: 50%;float: right;

				overflow:hidden;
			}
			.items8 img {

				height: 515px;margin: 5px;width: 50%;float: right;
			}
			.shadow8 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items8:hover .shadow8 {
				top:0;
				margin: 5px;

			}

			/* second image */
			.items2 {
				position:relative;
				height: 515px;margin: 5px;width: 48%;float: right;

				overflow:hidden;
				margin-left:0px;
			}
			.items2 img {

				height: 515px;margin: 5px;width: 48%;float: left; margin-left:0px;
			}
			.shadow2 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
				margin-left:0px;
			}
			.items2:hover .shadow2 {
				top:0;
				margin: 5px;
				margin-left:0px;
			}
			/* 3rd image */
			.items3 {
				position:relative;
				height: 515px;margin: 5px;width: 50%;float: left;

				overflow:hidden;
			}
			.items3 img {

				height: 515px;margin: 5px;width: 50%;float: left;
			}
			.shadow3 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items3:hover .shadow3 {
				top:0;
				margin: 5px;

			}
			/* Little first Image */
			.items4 {
				position:relative;

				height: 250px;margin: 5px;width: 48%; float:right;

				overflow:hidden;
			}
			.items4 img {

				height: 250px;margin: 5px;width: 48%; float:right;
			}
			.shadow4 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:99%;
				position:absolute;
				top: -100%;
			   transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items4:hover .shadow4 {
				top:0;
				margin: 5px;
				margin-left:0;

			}
			/* Little 2nd Image */
			.items5 {
				position:relative;
				height: 258px;margin: 5px;width: 48%; float:right;
				overflow:hidden;
			}
			.items5 img {

				height: 258px;margin: 5px;width: 48%; float:right;
			}
			.shadow5 {
				background: rgba(0,0,0,.6);
				height:97%;
				width:99%;
				position:absolute;
				top: -100%;
				transition:.9s;

				margin-top: 0px;
			}
			.items5:hover .shadow5 {
				top:0;
				margin:5px;
				margin-left:0;

			}
			.full-body {

			min-height: 420px;
			background-image: url("images/tile.jpg");
			margin-top:352px;
			padding-bottom: 30px;
			padding-top: 20px;
			border-top: 2px solid white;
			}
			.rooms-and-suites-header {
				text-align: center;
				margin: 55px auto 70px;
				margin-top: -68px;
			}
			.rooms-and-suites-header p {
				color: #212020;
				font-size: 17px;
				line-height: 26px;
				margin: 30px auto;
				max-width: 800px;
			}

			.rooms-and-suites-header h3 {
				color: #88898a;
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 40px;
				margin-bottom: 0px;
				padding-top: 72px;
			}
			.rooms-and-suites-header h1 {
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 50px;
				margin-top: 0px;
			}
			* {
			  -webkit-box-sizing: border-box;
				 -moz-box-sizing: border-box;
				  -ms-box-sizing: border-box;
					  box-sizing: border-box;
			}


			.pic {
			  border: 10px solid #fff;
			  float: left;
			  height: 300px;
			  width: 300px;
			  margin: 20px;
			  overflow: hidden;

			  -webkit-box-shadow: 5px 5px 5px #111;
					  box-shadow: 5px 5px 5px #111;
			}
			/*MORPH*/
			.morph {
			  -webkit-transition: all 0.5s ease;
				 -moz-transition: all 0.5s ease;
				   -o-transition: all 0.5s ease;
				  -ms-transition: all 0.5s ease;
					  transition: all 0.5s ease;
			}

			.morph:hover {
			  border-radius: 50%;
			  -webkit-transform: rotate(360deg);
				 -moz-transform: rotate(360deg);
				   -o-transform: rotate(360deg);
				  -ms-transform: rotate(360deg);
					  transform: rotate(360deg);
			}

         input[type=submit]{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: lightgreen;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
            }

            input[type=submit]:hover{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: green;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
            }


				/* Pulse effect */
				@-webkit-keyframes pulse {
				 25% {
				  -webkit-transform: scale(1.2);
				  transform: scale(1.2);
				  }
				  75% {
				  -webkit-transform: scale(0.8);
				  transform: scale(0.8);
				  }
				}
				@keyframes pulse {
				  25% {
				 -webkit-transform: scale(1.2);
				 -ms-transform: scale(1.2);
				 transform: scale(1.2);
				 }
				75% {
				-webkit-transform: scale(0.8);
				-ms-transform: scale(0.8);
				transform: scale(0.8);
				}
			  }
			.pulse {
			  display: inline-block;
			  -webkit-transform: translateZ(0);
			  -ms-transform: translateZ(0);
			  transform: translateZ(0);
			  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
			}
			.pulse:hover {
			  -webkit-animation-name: pulse;
			  animation-name: pulse;
			  -webkit-animation-duration: 1s;
			  animation-duration: 1s;
			  -webkit-animation-timing-function: linear;
			  animation-timing-function: linear;
			  -webkit-animation-iteration-count: infinite;
			  animation-iteration-count: infinite;
			}

		</style>
	</head>
	<body>

			<!-- 01. -->
			<div class="upper">

			<!-- Navbar -->
				<div id="header" class="inner-header" style="z-index: 6;">
					<!--01-->
					<div class="inner-top">

					</div>
					<!--02-->
					<div class="inner-header">
						<div id="header" class="inner-header" style="z-index: 6;">


					<div class="navcontainer">
						<div class="row">
								<div class="logo">
									<img src="images/leftSide picLogo.png" style="width: 273px; height: 261px; margin-left: 18px;">
								</div>


								<ul class="main-nav">
									<li class="odd first-child" style="padding: 20px;margin-left: 140px;/* font-weight: bold; */">
										<a href="home.php">Home</a>
									</li><li class="active even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="rooms.php">Rooms &amp; Suites</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="restaurants.php">Restaurants</a>
									</li><li class="even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="meetings.php">Meetings  &amp; Events</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="relaxation.php">Relaxation</a>
									</li><li class="even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="recreations.php">Recreations</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="offers.php">Offers</a>
									</li><li class="even last-child" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="contact.php">Contact</a>
									</li>
								</ul>

						</div><!-- End .row -->
					</div><!-- End .container -->
				</div>
				</div>
				<!-- End of 2 -->

					<!--03-->
					<div class="inner-detail-container">
						<!-- -->
						<img src="images/contactLogo2.jpg" alt="Picture Not Found" id="pictureLogo">

					</div>

					<div class="reservation"
										style="background: #938048;color:white;margin-top: -120px;width: 10%;text-align: center;float: right;display=inline-block;padding: 2px;"
					>
														<a href="reservation.php" style="text-decoration:none; color: white">
															Book Now
														</a>
					</div>


				</div>
			</div>
			<!-- End. of Upper -->

			<!--02.Body  -->

		<div class="full-body">

		<div class="container">
						<!-- Form start -->
						<!-- Important & all PHP code here -->
						<div class="col-xs-12 col-sm-9 col-md-9" style="width:100%">

							<div class="contact_enquiry_div reservation_container" style="width:100%;">
								<h1 class="header" style="color: lightgreen; font-weight: bold; margin-bottom: 30px;">
									Book For Reservation <span></span> <span class="bracket"></span>
									<span class="title-block"></span>
								</h1>
								<form id="contact-us" class="form-horizontal" action="reservation.php" method="post" novalidate="novalidate">
								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									 style="text-align: left;"
									>Check In:<span>*</span></label>
									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" id="check_in_date" name="checkin" class="form-control hasDatepicker" value="" placeholder="Check In Date" data-msg-required="Please select check in date." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Check Out:<span>*</span></label>
									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" id="check_out_date" name="checkout" class="form-control hasDatepicker" value="" placeholder="Check Out Date" data-msg-required="Please select check out date." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<h4 class="col-md-12 control-label"
									style="text-align: left; font-weight: bold;"
									>Reservation Information</h4>
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Room Type:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <select name="room_type" class="form-control" data-msg-required="Please select room type." required aria-required="true">
											<option value=""></option>
											<option value="King Deluxe">King Deluxe</option>
											<option value="Queen Deluxe">Queen Deluxe</option>
											<option value="Royal Suite Superior">Royal Suite Superior</option>
											<option value="Royal Suite Deluxe">Royal Suite Deluxe</option>
											<option value="Executive Suite King">Executive Suite King</option>
											<option value="Executive Suite Queen">Executive Suite Queen</option>
											<option value="Triple Deluxe">Triple Deluxe</option>
											<option value="Presidential Deluxe">Presidential Deluxe</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label for="inputPassword3" class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Number of room/suite:<span>*</span></label>
									<div class="col-xs-12 col-sm-8 col-md-9">
									  <select name="no_of_room" class="form-control" data-msg-required="Please select number of room/suite." required aria-required="true">
										<option value=""></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5+">more than 5</option>
									</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Number of Persons:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
										<select name="no_of_person" class="form-control" data-msg-required="Please select number of person." required aria-required="true">
											<option value=""></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10+">more than 10</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End . -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Number of Children:</label>

									<div class="col-xs-12 col-sm-8 col-md-9">
										<select name="no_of_children" class="form-control" data-msg-required="Please select number of children.">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10+">more than 10</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End . -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Airport Pick Up:</label>

									<div class="col-xs-12 col-sm-8 col-md-9">
										<select name="airport_pick_up" class="form-control" data-msg-required required aria-required="true">
											<option value="no">No</option>
											<option value="yes">Yes</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End . -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Remarks:</label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <textarea name="note" class="form-control" data-msg-required="Please enter your note."></textarea>
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<h4 class="col-md-12 control-label"
									style="text-align: left; font-weight: bold;"
									>Personal Information</h4>
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Title:<span>*</span></label>
									<div class="col-xs-12 col-sm-8 col-md-9">
										<select name="title" class="form-control" data-msg-required="Please select your title." required aria-required="true">
											<option value=""></option>
											<option value="Mr">Mr</option>
											<option value="Mrs">Mrs</option>
											<option value="Miss">Miss</option>
											<option value="Dr">Dr</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End . -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>First Name:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" class="form-control" name="fname" data-msg-required="Please enter your first name." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Last Name:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" class="form-control" name="lname" data-msg-required="Please enter your last name." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Primary Contact No.:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" class="form-control" name="primary_contact_no" data-msg-required="Please enter primary contact number." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Email:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="email" class="form-control" name="email" data-msg-required="Please enter your email." required aria-required="true">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Address:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <textarea name="address" class="form-control" data-msg-required="Please enter your address." required aria-required="true"></textarea>
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>
									City:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
									  <input type="text" class="form-control" name="city">
									</div><!-- End .col-md-10 -->
								  </div><!-- End .form-group -->

								  <div class="form-group">
									<label class="col-xs-12 col-sm-4 col-md-3 control-label"
									style="text-align: left;"
									>Country:<span>*</span></label>

									<div class="col-xs-12 col-sm-8 col-md-9">
										<select name="country" class="form-control" data-msg-required="Please select your country." required aria-required="true">
											<option value=""></option>
											<option value="Afganistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bonaire">Bonaire</option>
											<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Canary Islands">Canary Islands</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Channel Islands">Channel Islands</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos Island">Cocos Island</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote DIvoire">Cote D'Ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curaco">Curacao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="East Timor">East Timor</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands">Falkland Islands</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Ter">French Southern Ter</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Great Britain">Great Britain</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Hawaii">Hawaii</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea North">Korea North</option>
											<option value="Korea Sout">Korea South</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau">Macau</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Malawi">Malawi</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Midway Islands">Midway Islands</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Nambia">Nambia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherland Antilles">Netherland Antilles</option>
											<option value="Netherlands">Netherlands (Holland, Europe)</option>
											<option value="Nevis">Nevis</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau Island">Palau Island</option>
											<option value="Palestine">Palestine</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Phillipines">Philippines</option>
											<option value="Pitcairn Island">Pitcairn Island</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Republic of Montenegro">Republic of Montenegro</option>
											<option value="Republic of Serbia">Republic of Serbia</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="St Barthelemy">St Barthelemy</option>
											<option value="St Eustatius">St Eustatius</option>
											<option value="St Helena">St Helena</option>
											<option value="St Kitts-Nevis">St Kitts-Nevis</option>
											<option value="St Lucia">St Lucia</option>
											<option value="St Maarten">St Maarten</option>
											<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
											<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
											<option value="Saipan">Saipan</option>
											<option value="Samoa">Samoa</option>
											<option value="Samoa American">Samoa American</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Tahiti">Tahiti</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Erimates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States of America">United States of America</option>
											<option value="Uraguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vatican City State">Vatican City State</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
											<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
											<option value="Wake Island">Wake Island</option>
											<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
											<option value="Yemen">Yemen</option>
											<option value="Zaire">Zaire</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div><!-- End .col-md-10 -->
								  </div><!-- End . -->



								<!-- Submit button at the center of the page -->
										<div style="text-align:center" >
											<input class="pulse" type="submit" name="sign_up_button" value="SIGN UP" >

										</div>

								  <!-- End .form-group -->
								</form>
							</div>
						</div>
			<!--End. Form-->

			</div>
		</div>
			<!-- End. of Body -->

			<!-- 03. -->

			<div class="footer">
				<center><p style="text-weight:bold text-align:right;">Copyright &copy;  2020. Sea Side South Park &amp; Golf. All rights reserved. </p> </center>
				<center>Site by <a href="https://www.facebook.com/profile.php?id=100009903254501" target="_blank">Chathumika Wijesinghe</a> <p></p></center>
			</div>
			<!-- End. of Footer -->




	</body>
</html>
