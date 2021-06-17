<!---->
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sea Side South Park</title>
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
			font-size: 15px;
			line-height: 22px;
			color: #505050;
			}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    display: block;
    width: 100%;
    background-size: cover;
    margin: 0 auto;
    max-height: 678px;
    padding-bottom: 10px;
	-webkit-transition: 0.2s ease-in-out left;
    -moz-transition: 0.2s ease-in-out left;
    -o-transition: 0.2s ease-in-out left;
    transition: 0.2s ease-in-out left;
  }

  .container {
	 width: 100%;
    max-height: 400px;
    margin: 0px;
    padding: 0px;
    margin-top: -20px;
	}
	#boxcontainer {
	 width: 1170px;
    min-height: 2000px;

    margin: 0 auto;
    margin-top: 294px;


	}
	.footer {
				background: black;
				color: wheat;
				/* margin-top: -59px; */
				padding: 20px;
				padding-bottom: 5px;
				border-bottom: 1px solid green;
				margin-top: 20px;
			}
	.footer a:hover {
		color:green;

	}

	.header {
	 position: absolute;
    left: 0px;
    right: 0px;
    top: 0px;
    display: block;
    padding: 10px 0px;
    text-align: center;
    z-index: 99999;
	 z-index: 6;
	 min-height:50px;
	 	font-family: 'Alegreya Sans', sans-serif;
	}
	a {
				text-decoration:none;
				color: #ffde7e;
				text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
				font-size: 23px;
	}

	a:hover {
			text-decoration:none;
			color: #ffde7e;
			font-weight: bolder;
			font-size:24px;

	}
	.header {
		background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);

	}
	#go-to-next {
	 display: block;
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: 80px;
    z-index: 5;
	}

	#goto-next a:hover {
    color: #ffde7e;
    border-color: #ffde7e;
	}

	#goto-next a {

	}
	.bothpart {
	position:relative;
	min-height: 600px;
	width: 1170px;
	}
	.rightBody{
		float:right;

		width: 40%;
		min-height: 500px;
		padding:2px;
		display:block;
		padding: 60px;
	}
	.leftBody {
		float: left;
		/*background: blue; */
		width: 58%;
		min-height: 500px;
		padding:2px;
	}
	#boxcontainer .wc-text h1 span {
    display: block;
    font-size: 24px;
    color: #000;
    margin-bottom: 13px;

	}
	#boxcontainer .wc-text h1{
    display: block;
    font-size: 35px;
    line-height: 25px;
    font-weight: 300;
    color: #a76127;

	}
	#boxcontainer .wc-text p.quote {
    display: block;
    padding: 5px 0px 14px;

	}
	#boxcontainer .wc-text p.quote:after {
    content: '';
    display: block;
    position: relative;
    width: 100px;
    border-top: 2px solid #a76127;
    margin-top: 20px;

	}
	#boxcontainer .wc-text p.welcome-detail {
    line-height: 26px;
    text-align: justify;
    word-spacing: 8px;
    font-size: 14px;
	color: #212020;
	}

	/* Middle Image Part */
				.full-body {
					background: orange;
					width: 1170px;
					margin: 0 auto;
					margin-top: -100px;
				}
				body {
				  background: white;
				}

		/* 1 */
			.grow img {
			  height: 430px;
			  width: 760px;

			  -webkit-transition: all 1s ease;
				 -moz-transition: all 1s ease;
				   -o-transition: all 1s ease;
				  -ms-transition: all 1s ease;
					  transition: all 1s ease;
			}

			.grow img:hover {
			  width: 820px;
			  height: 530px;
			}
			* {
				  -webkit-box-sizing: border-box;
					 -moz-box-sizing: border-box;
					  -ms-box-sizing: border-box;
						  box-sizing: border-box;
				}



				.pic {

					float: left;
					height: 430px;
					width: 760px;
					margin: 5px;
					overflow: hidden;
					-webkit-box-shadow: 5px 5px 5px #111;
					box-shadow: 5px 5px 5px #111;
					margin-bottom: 10px;
				}


			/* 2 */

			  .grow2 img {
			  height: 210px;
			  width: 385px;

			  -webkit-transition: all 1s ease;
				 -moz-transition: all 1s ease;
				   -o-transition: all 1s ease;
				  -ms-transition: all 1s ease;
					  transition: all 1s ease;
			}

			.grow2 img:hover {
			  height: 258px;
			  width: 420px;
			}
			* {
				  -webkit-box-sizing: border-box;
					 -moz-box-sizing: border-box;
					  -ms-box-sizing: border-box;
						  box-sizing: border-box;
				}


			.pic2 {

					float: right;
					height: 210px;
					width: 385px;
					margin: 5px;
					overflow: hidden;
					-webkit-box-shadow: 5px 5px 5px #111;
					box-shadow: 5px 5px 5px #111;

				}
			/* End 2 */

			/* 3 */

			.grow3 img {
			  height: 424px;
			  width: 575px;

			  -webkit-transition: all 1s ease;
				 -moz-transition: all 1s ease;
				   -o-transition: all 1s ease;
				  -ms-transition: all 1s ease;
					  transition: all 1s ease;
			}

			.grow3 img:hover {
			  width: 665px;
			  height: 524px;
			}
			* {
				  -webkit-box-sizing: border-box;
					 -moz-box-sizing: border-box;
					  -ms-box-sizing: border-box;
						  box-sizing: border-box;
				}

				.pic3 {

					float: left;
					height: 424px;
					width: 575px;
					margin: 5px;
					overflow: hidden;
					-webkit-box-shadow: 5px 5px 5px #111;
					box-shadow: 5px 5px 5px #111;
					margin-bottom: 10px;
				}

		/* End.of 3 */


  </style>
</head>
<body>   <!-- Header Container -->
			<div class = "header">
				<!-- LOGO -->
				<div class="logo">
					<center><img src="images/centrepiclogo.png" class="img-rounded" alt="Sea Side South Park" style="height:145px;"></center>
					<!--<center><h2>Knignt's Luxury <br>Tea Resort & Golf</h2><center> -->
				</div>
				<!-- Reservation-->
				<div class="reservation"
									style="background: #938048; color:white; margin-top:-35px; width: 10%; text-align: center;float: right;padding:5px;display=inline-block"
								>
									<a href="booking.php" style="text-decoration:none; color: white; font-size:18px;">
										BOOK NOW
									</a>
				</div>

				<!-- Nav -->
				<ul class="main-nav" style="display: inline-flex;  list-style-type: none;
			   width: 100%; margin: 0 auto; text-align: center;
				font-size: 18px; margin-right: 145px; ">

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
									</li>
								</ul>

			</div>
			<!-- End.Header Container -->
			<div id="go-to-next">
			<!-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i> -->
			<a href="#boxcontainer" style="position: relative;
			display: block;
			height: 60px;
			width: 60px;
			border: 2px solid #FFF;
			color: #FFF;
			margin: 0 auto;
			text-align: center;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border-radius: 50%;
			transition: all .10s ease-in;
			padding: 18px;
			">
			<i class="fa fa-chevron-down" aria-hidden="true" style="font-size:20px">
			</i></i>
			</a>


			</div>
			<!-- Slider Image Start -->
			<div class="container">
			  <br>
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				  <div class="item active">
					<img src="images/bigImage2.jpg" alt="No Image Found">
				  </div>

				  <div class="item">
					<img src="images/bigImage1.jpg" alt="No Image Found">
				  </div>

				  <div class="item">
					<img src="images/bigImage5.jpg" alt="No Image Found">
				  </div>

				  <div class="item">
					<img src="images/bigImage4.jpg" alt="No Image Found">
				  </div>
				</div>

			  </div>
			</div>
			<!-- Slider Image End -->
			<!-- Middle part - Box Container - start -->
			<div id="boxcontainer">
				<div class = "bothpart">
					<div class="leftBody">
						   <div class="wc-text" style="padding: 20px; padding-top: 10px;">
								<h1>
									<span>Welcome to</span>
									Sea Side South Park
								</h1>
								<p class="quote"></p>
								<p class="welcome-detail">
									<span>Sea Side South Park</span>, a Wonder in the surrounding of lavishing greenery of Srimongal (the Tea Capital of Bangladesh). Equipped with all modern state of art Amenities and Facilities, Located within an area of 13.02 acres, this Resort is the true combination of Ultimate Luxury, Gracious Hospitality and Admirable Greenery. Classified in 07 categories, GS welcomes you with 135 Rooms and Suites to meet all your Expectations.
								</p>
							</div>
							<p class="quote"></p>
					</div>

					<!--END.leftBody -->
					<div class = "rightBody">
						<img src ="images/awards2.jpg" alt="Awards Image" style="width:350px;height:116px;/* padding:20px; */padding-bottom: 0px;"/>
						<img src="images/awards.jpg" alt="Awards Image" style="width:233px;height:271px;/* padding:20px; *//* padding-top: 0px; */margin-left: 65px;/* margin: 0 auto; */"/>
					</div>
					<!--END.RightBody -->
				</div>


			<!-- End.Middle part - Box Container -->
			<!-- Middle Image Part -->
			<div class="full-body">

			<!-- 1st Row -->

			<div class="grow pic">
				<h1 style="position: absolute;font-size: 40px;line-height: 30px;font-weight: bold;color: white;padding: 20px; background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);margin: 0;min-width: 760px;">Rooms &amp; Suits</h1>
				<img src="images/1.jpg" alt="No image"/>
			</div>

			<div class="grow2 pic2">
				<h1 style="position: absolute;font-size: 32px;line-height: 30px;font-weight: bold;color: white;padding: 20px;margin: 0px;min-width: 385px;background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);">Movie Theatre</h1>
				<img src="images/2.jpg" alt="No image"/>
			</div>

			<div class="grow2 pic2">
				<h1 style="position: absolute;font-size: 32px;line-height: 30px;font-weight: bold;color: white;padding: 20px;margin: 0px;min-width: 385px;background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);">Children's Playzone</h1>
				<img src="images/3.jpg" alt="No image"/>
			</div>
			<!-- End.1st Row -->

		<!-- 3rd Row -->
			<div class="grow3 pic3">
				<h1 style="position: absolute;font-size: 40px;line-height: 30px;font-weight: bold;color: white;padding: 20px; background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);margin: 0;min-width: 575px;">Restaurants</h1>
				<img src="images/4.jpg" alt="No image"/>
			</div>
			<div class="grow3 pic3">
								<h1 style="position: absolute;font-size: 40px;line-height: 30px;font-weight: bold;color: white;padding: 20px; background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);margin: 0;min-width: 575px;">Swimming Pool</h1>
				<img src="images/5.jpg" alt="No image"/>
			</div>
		<!-- End. 3rd Row -->

		<!-- 2nd Row(last) -->

			<div class="grow pic">
				<h1 style="position: absolute;font-size: 40px;line-height: 30px;font-weight: bold;color: white;padding: 20px; background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);margin: 0;min-width: 760px;">Hall Room</h1>
				<img src="images/6.jpg" alt="No image"/>
			</div>

			<div class="grow2 pic2">
				<h1 style="position: absolute;font-size: 32px;line-height: 30px;font-weight: bold;color: white;padding: 20px;margin: 0px;min-width: 385px;background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);">Library</h1>
				<img src="images/7.jpg" alt="No image"/>
			</div>

			<div class="grow2 pic2">
				<h1 style="position: absolute;font-size: 32px;line-height: 30px;font-weight: bold;color: white;padding: 20px;margin: 0px;min-width: 385px;background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);">Corporate Meeting</h1>
				<img src="images/8.jpg" alt="No image"/>
			</div>

		<!-- End 2nd Row -->


	</div>
	</div>
	<!-- End Middle Image part -->
			<!-- Footer -->

			<div class="footer">

				<center><p style="text-weight:bold text-align:right;">Copyright &copy;  2020. Sea Side South Park &amp; Golf. All rights reserved. </p> </center>
				<center>Site by <a href="https://www.facebook.com/profile.php?id=100009903254501" target="_blank">Chathumika Wijesinghe</a> <p></p></center>
			</div>

			<!-- End. of Footer -->
</body>
</html>
