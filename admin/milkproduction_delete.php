<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";
$errors = array();
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!empty($_GET['breed']))
{
	$reslt = mysqli_query($conn,"DELETE FROM `milkproduction` WHERE breed='".$_GET['breed']."'");
	if($reslt){
		header("location:milkproduction.php?status=remove");
	}
}
else
{
}
?>