
<?php session_start(); ?>
<html>
	<head>
		<title>Login</title>
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
				background:url("1485894.jpg");
				background-size:cover;
				background-position:center;
				width:100%;
				height:100vh;
			}
			.form-container{
				border:0px solid #fff;
				padding:50px 60px;
				margin-top:20vh;
				-webkit-box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
				-moz-box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
				box-shadow: 2px 3px 23px 19px rgba(0,0,0,0.71);
			}
		</style>
	</head>
	<body >
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">

					<form class="form-container" action="login_backend.php" method="POST">
						<h2>Login Form</h2>
						<div class="form-group">
							<label for="uid"><b>Username</b></label>
							<input type="text" class="form-control" placeholder="Enter Username.." name="username" required>
						</div>
						<div class="form-group">
							<label for="psw"><b>Password</b></label>
							<input type="password" class="form-control" placeholder="Enter password.." name="password" required>
						</div>
						<button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
			
						<button type="button" class="btn btn-danger btn-block" style="margin-top:20px;">Cancel</button>
						<button type="reset" class="btn btn-success btn-block">Reset</button>
						<a href="reg.php">Create Account</a>
					</form>
				</div>
			</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</body>
</html>
