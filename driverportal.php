
<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['share']))
{
	header("location:drivers-map.php");
}
if(isset($_POST['stop']))
{
	header("location:deletelist.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Driver | Driving Tracking Portal</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	
</head>
<body>
<?php include('include/header.php');?>

<br></br>
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			
			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>User Management</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											
											
											<th>Direction</th>
											
											
											<th>Action</th>
											
										
										</tr>
									</thead>
								
<tbody>

										
										<tr>
											<td>Share Location</td>
											<td><a href="drivers-map.php">Share</a>
											</td>
											</tr>
												<tr>
											<td>Stop Sharing Location</td>
											<td><a href="deletelist.php?lat=<?php echo htmlentities($row['lat']);?>">Stop</a>
											</td>
											</tr>
	

										
										</tbody>
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->


<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>