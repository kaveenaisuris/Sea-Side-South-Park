<!---->
<!DOCTYPE html>
<?php ob_start(); ?>
<html>
	<head>
		<title>Sea Side South Park</title>
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
			position: relative;
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
			width: 1170px;
			margin:0 center;
			min-height:555px;
			margin-left:60px;
			padding:20px;

			}
			.address_div, .contact_enquiry_div {
				margin-top: 75px;
			}
			.full-body {

			min-height: 420px;

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
				color: #ffde7e;
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 40px;
				margin-bottom: 0px;
				padding-top: 72px;
				margin-top: 73px;
				margin-bottom: 0px;

			}
			.rooms-and-suites-header h1 {
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 50px;
				margin-top: 0px;
			}
			.address_div h3 {
				color: #938048;
				font-weight: normal;
			}
			.address_div ul li {
				font-weight: 400;
				color: #747373;
				font-size: 16px;
				font-family: sans-serif;
				list-style-type: none;
			}
			h3, .h3 {
			font-size: 24px;
			}
			.contact_enquiry_div {
				margin-top: 65px;
			}
			.contact_enquiry_div h3 {
				color: #938048;
				font-weight: normal;
			}
			.form-control {
				display: block;
				width: 80%;
				height: 34px;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.42857143;
				color: #555;
				background-color: #fff;
				background-image: none;
				border: 1px solid #ccc;
				-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
				-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
				transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			}

			.button {
				  display: inline-block;
				  border-radius: 4px;
				  background-color: #f4511e;
				  border: none;
				  color: #FFFFFF;
				  text-align: center;
				  font-size: 20px;
				  padding: 5px;
				  width: 100px;
				  transition: all 0.5s;
				  cursor: pointer;
				  margin-top: 10px;
				}

				.button span {
				  cursor: pointer;
				  display: inline-block;
				  position: relative;
				  transition: 0.5s;
				}

				.button span:after {
				  content: ' >';
				  position: absolute;
				  opacity: 0;
				  top: 0;
				  right: -20px;
				  transition: 0.5s;
				}

				.button:hover span {
				  padding-right: 25px;
				}

				.button:hover span:after {
				  opacity: 1;
				  right: 0;
				}

				.one {
					width: 50%;
					float: right;
				}
				.two {
					width: 50%;
					float: left;
				}
				
				input[type=submit] {
					
					background-color: #4CAF50;
					color: white;
					border: none;
					border-radius: 4px;
					cursor: pointer;
					width: 160px;
				}

				input[type=submit]:hover {
					background-color: #45a049;
					width: 160px;
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

.btn-send {
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 40px;
    padding: 10px 15px; 
}
 
        /* Always set the map height explicitly to define the size of the div
   



	</style>
	</head>
	<body>
    <?php
               if(isset($_SESSION['username'])){
                  // echo "<li><a href='#'>{$_SESSION['username']}</a></li>";
                   //echo "<li><a href='adpost.php'>Post a Ad</a></li>";
                  // echo "<li><a href='logout.php'>Log Out</a></li>";
               }else{
               //   echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
               //    echo "<li><a href='reg.php'><span class='glyphicon glyphicon-log-in'></span> Register</a></li>";
               }
               
               ?>
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
						<img src="images/bigImage5.jpg" alt="Picture Not Found" id="pictureLogo">

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

			<!--02.Body  -->









		<div class="full-body">
			<div class="container">

			<div class="one">
				<div class="contact_enquiry_div">
					<h3>Send us your enquiry</h3>
					
					


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname </label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname " required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname </label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname " required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email </label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message </label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div><br>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <!-- <p class="text-muted"><strong>*</strong> These fields are required. Contact form by <a href="https://hubbunch.com" target="_blank">HubBunch</a>.</p>-->
                                </div>
                            </div>
                        </div>

                    </form>

  <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    //echo "<script>alert('Something Went wrong!!')</script>";
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }
            }
            ?>


				</div>
			</div>
		<div class ="two">
			<div class="address_div">
					<h3>Sea Side South Park</h3>
					<ul>
						<li class="odd first-child">Sri Lanka.</li>
						<li class="even">Mob: +94 719081655, 775471672</li>
						<li class="odd">Tel: +94 912254249</li>
						<li class="odd">Email: cdw@gmail.com</li>
						<li class="even last-child">Fax: +94 912254249</li>
					</ul>

					<h3>Corporate Office</h3>
					<ul>
						<li class="odd first-child">No: 371/11, Main Street, Ambalangoda</li>
						<li class="even">Sea Side South Park, Sri Lanka.</li>
						<li class="odd">Tel: +94 703471672</li>
						<li class="even last-child">Fax: +94 912257389</li>
					</ul>

				</div>
			</div>


			</div>
		</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047271.3028246546!2d78.46163976849449!3d7.851731221134357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1596855722343!5m2!1sen!2slk"  width="1520" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



			<!-- End. of Body -->

			<!-- 03. -->

			<div class="footer">
				<center><p style="text-weight:bold text-align:right;">Copyright &copy;  2020. Sea Side South Park &amp; Golf. All rights reserved. </p> </center>
				<center>Site by <a href="https://www.facebook.com/profile.php?id=100009903254501" target="_blank">Chathumika Wijesinghe</a> <p></p></center>
			</div>
			<!-- End. of Footer -->




	</body>
</html>
