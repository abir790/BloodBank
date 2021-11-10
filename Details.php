 <?php
include('dbcon.php');
$singledata=$_GET['readid'];
$sequery="SELECT * FROM `blood_bank` where `serial`=$singledata ";
$store=mysqli_query($connect,$sequery);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/detailstyle.css">
</head>
<body>

<div class="container-fluid" style="background-image: url(img/in2.jpg);">
  <a href="index.php">Back to home page</a>
	<?php $realdata=mysqli_fetch_array($store)?>
  <div class="panel panel-primary" >
  	<div class="panel-heading" style="background-image: url(img/blist.jpg);"><h1><?php echo $realdata['name']?>  Addresss</h1></div>
  	<div class="panel-body" style="background-image: url(img/blist1.jpg);">
  		<?php echo $realdata['name'];?><br>
  		<?php echo $realdata['blood_group'];?><br>
  		<?php echo  $realdata['contact_Number'];?><br>
  		<?php echo  $realdata['email'];?><br>
  		<?php echo  $realdata['present_address'];?><br>

  	</div>

  </div>
  
</div>

</body>
</html> 