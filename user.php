
<?php
session_start();
include('include/config.php');

	if(isset($_POST['submit']))
    {
	$username=$_POST['username'];
	$phone_number=$_POST['phone_number'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	
$sql=mysqli_query($con,"insert into userdetails(username,phone_number,email,password) values('$username','$phone_number','$email','$password')");

if($sql)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Driving Tracking Portal</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="login.html">
			  		Driving Tracking Portal
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="http://localhost/driver-tracking/userin.php">
					Back to Portal
						
						</a></li>

						

						
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>User's Log In</h3>
						</div>
						<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span13" type="text" id="inputName" name="username" placeholder="Name" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span13" type="text" id="inputPhone" name="phone_number" placeholder="Phone Number" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span13" type="text" id="inputEmail" name="email" placeholder="E-mail" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span13" type="password" id="inputPassword" name="password" placeholder="Password" required>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Log In</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2020  </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
