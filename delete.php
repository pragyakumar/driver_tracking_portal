<?php
include("include/config.php");

$email  = $_GET['email'];
$query = "DELETE FROM USERDETAILS WHERE EMAIL = '$email'";
$data = mysqli_query($con,$query);
if($data)
{
	echo"<font color='green'>Record Added";
	
}
else
{
	 echo"<font color='red'>Failed to Add ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Driver Tracking Portal</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<a href="useremail.php">
<p>Back to the portal</p>
</a>
</body>
</html>