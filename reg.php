<?php session_start(); ?>
<html>
	<head>
		<title>create account</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			*{
				color:#fff;
			}
			.bg{
				background:url("sky-36717.jpg");
				background-size:cover;
				background-position:center;
				width:100%;
				height:100vh;
			}
			.form-container{
				border:0px solid #fff;
				padding:18px 60px;
				margin-top:12vh;
				-webkit-box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
				-moz-box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
				box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
			}
		</style>
	</head>
	<body>
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
				
					<form class="form-container" action="reg_backend.php" method="POST">
						<h2>Create Account</h2>
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" name="fname" placeholder="first name.." required>
						</div>
						<div class="form-group">	
							<label>Last name</label>
							<input type="text" class="form-control" name="lname" placeholder="last name.." required>
						</div>
					   <div class="form-group">	
							<label>User name</label>
							<input type="text" class="form-control" name="uname" placeholder="user name.." required>
						</div>
						<div class="form-group">	
							<label>Email</label>
							<input type="email" class="form-control" name="mail" placeholder="email.." required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="pass" placeholder="enter password.." required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="text" class="form-control" name="num" placeholder="mobile.." required>
						</div>			

						<button type="submit" class="btn btn-info btn-block" name="register" value="register" id="butt">Register</button>
						<button type="reset" class="btn btn-success btn-block" style="margin-top:10px;">Reset</button>
						<a href="login.php">Login Account</a>
					</form>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
		</div>
	</body>
</html>