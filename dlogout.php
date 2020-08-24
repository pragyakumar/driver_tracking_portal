<?php
session_start();
$_SESSION['alogin']=="";
session_unset();
include("include/config.php");

$driverid = $_GET['driverid'];
$query = "DELETE FROM DRIVERDETAILS WHERE DRIVERID = '$driverid'";
$data = mysqli_query($con,$query);
if($data)
{
	$_SESSION['errmsg']="You have successfully logout";
	
}
else
{
	 $_SESSION['errmsg']="Your Record wasn't deleted";
}
?>
<script language="javascript">
document.location="index.php";
</script>

