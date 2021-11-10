<?php
ob_start();
include('dbcon.php');
$updateid=$_GET['updateid'];
$sequery="select * from blood_bank where serial=$updateid";
$store=mysqli_query($connect,$sequery);
$storeddata=mysqli_fetch_array($store);
$dbname=$storeddata['name'];
$dbblood=$storeddata['blood_group'];
$dbcontact=$storeddata['contact_Number'];
$dbemail=$storeddata['email'];
$dbaddress=$storeddata['present_address'];

?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Donar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/registyle.css">
</head>
<body>


<div class="container-fluid">
  <div class="well" style="background-image: url('img/Blood1.jpg');">
    <h2>Edit Donar Information</h2>
  </div>
  <?php
  if (isset($_POST['updateuser']))
  {
    $sname=$_POST['sname'];
    $bblood=$_POST['bblood'];
    $ccontact=$_POST['ccontact'];
    $smail=$_POST['smail'];
    $saddress=$_POST['saddress'];

    $updatequery="UPDATE `blood_bank` SET `name`='$sname',`blood_group`='$bblood',`contact_Number`='$ccontact',`email`='$smail',    `present_address`='$saddress' WHERE serial=$updateid ";
    
    $updateitem=mysqli_query($connect,$updatequery);
    if ($updateitem==true) {
      header('location:adminblood.php');
    }
    else
    {
      die("Not Possible Coz".mysqli_error($connect));
    }
  }    
  ?>          
  <form class="form-horizontal" action="#" method="post" style="background-image: url('img/Blood1.jpg'); color: #fff;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Name :</label>
      <div class="col-sm-5">
        <input name="sname" type="text" class="form-control" id="name" value="<?php echo $dbname ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Blood Group:</label>
      <div class="col-sm-5">          
        <input name="bblood" type="txt" class="form-control" id="blood" value="<?php echo $dbblood ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">contact number:</label>
      <div class="col-sm-5">          
        <input name="ccontact" type="text" class="form-control" id="contact" value="<?php echo $dbcontact ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Email Account :</label>
      <div class="col-sm-5">          
        <input name="smail" type="email" class="form-control" id="email" value="<?php echo $dbemail ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Present Adderess :</label>
      <div class="col-sm-5">          
        <input name="saddress" type="text" class="form-control" id="Adderess" value="<?php echo $dbaddress ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="updateuser" type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger">Cancle</button>

      </div>
    </div>

  </form>

</div>
</body>
</html>
