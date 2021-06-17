<!-- -->
<!DOCTYPE html>
<html>
	<head>
		<title> Sea Side South Park</title>
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
			margin:0 auto
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
				margin: 0 center;
				padding: 20px;
				min-height: 700px;

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
			margin-top: 352px;
			min-height: 420px;
			/*background-image: url("images/tile.jpg");*/

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

		</style>
	</head>
	<body>

			<!-- 01.  -->
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
										<a href="about.php">About Us</a>									
									</li><li class="active even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="rooms.php">Rooms &amp; Suites</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="restaurants.php">Restaurants</a>
									</li><li class="even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="meetings.php">Meetings  &amp; Events</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="offers.php">Offers</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="gallery.php">Gallery</a>
									</li><li class="even last-child" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="contact.php">Contact</a>
								</ul>

						</div><!-- End .row -->
					</div><!-- End .container -->
				</div>
				</div>
				<!-- End of 2 -->

					<!--03-->
					<div class="inner-detail-container">
						<!-- -->
						<img src="images/bigImage3.jpg" alt="Picture Not Found" id="pictureLogo">

					</div>

					<div class="reservation"
						style="background: #938048;color:white;margin-top: -120px;width: 10%;text-align: center;float: right;display=inline-block;padding: 2px;"
					>
									<a href="booking.php" style="text-decoration:none; color: white">
										Book Now
									</a>
					</div>
				</div>
			</div>
			<!-- End. of Upper -->

			<!--02.Body -->

		<div class="full-body">
			<div class="container" style="background:white;">
				<div class="rooms-and-suites-header">
								<h3>OFFERS</h3>
								<h1 style="color:#505093">Discover Your Offers</h1>

								<p>
									Stay with Us! We will come to u with Lots of Offer only for your Comfort and Luxury!
									<br>Because We Care!
								</p>
				</div>
						<div class="morph pic" style="margin-left: 240px;">
							<img src="images/offers.jpg" alt="beach" style="width: 283px; height: 282px;">
						</div>

			</div>
		</div>
			<!-- End. of Body -->

			<!-- 03. -->

			<div class="footer">
				<center><p style="text-weight:bold text-align:right;">Copyright &copy;  2020. Sea Side South Park. All rights reserved. </p> </center>
				<center>Site by <a href="https://www.facebook.com/profile.php?id=100009903254501" target="_blank">Chathumika Wijesinghe</a> <p></p></center>
			</div>
			<!-- End. of Footer -->




	</body>
</html>
