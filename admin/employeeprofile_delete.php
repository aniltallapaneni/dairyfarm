<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";
$errors = array();
include("index.php"); 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!empty($_GET['eid']))
{
$reslt = mysqli_query($conn,"DELETE FROM `employee` WHERE employeeid='".$_GET['eid']."'");
echo "deleted successfully";
}
else
{
	header("location:dashboard.php");
}
?>