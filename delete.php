<?php
ob_start();
include('dbcon.php');
$singledata=$_GET['delid'];
$sequery="delete from blood_bank where serial=$singledata";
$store=mysqli_query($connect,$sequery);
if ($store==true) {
	header('location:adminblood.php');
	echo "Record deleted successfully";
}
?>