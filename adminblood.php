<?php
// session_start();
// if (!isset($_SESSION['uid'])) {
//   # code...
//   header('Location:adminlogin.php');
// }
ob_start();
include('menu.php');
include('dbcon.php');
$sequery="SELECT * FROM `blood_bank`";
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
  <link rel="stylesheet" type="text/css" href="style/bloodstyle.css">
</head>
<body>




<div class="container-fluid" style="background-image: url(img/blist1.jpg);">
	<div class="well"><h1>List Of Donor</h1></div>
            
  <table class="table table-condensed">
    <thead>
      <tr>
      	<th>Serial</th>
        <th>Name</th>
        <th>Blood Group</th>
        <th>Contact Number</th>
      </tr>
    </thead>
    <tbody>
 <?php $i=1;
    while($realdata=mysqli_fetch_array($store))
   {
 ?>
      <tr>
      	<?php $id=$realdata['serial'] ?>
      	<td><?php echo $i;?></td>
        <td><a href="Details.php?readid=<?php echo $id;?>"><?php echo $realdata['name'];?></a></td>
        <td><?php echo $realdata['blood_group'];?></td>
        <td><?php echo $realdata['contact_Number'];?></td>
        <td>
            <a href="update.php?updateid=<?php echo $id ?>" class="btn btn-success" target="_blank">Edit</a>
            <a href="delete.php?delid=<?php echo $id ?>" class="btn btn-danger">Delete</a>
          </td>
      </tr>
 <?php
   $i++;
   }
 ?>
    </tbody>
  </table>
</div>

</body>
</html> 