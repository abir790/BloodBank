<?php
ob_start();
include('menu.php');
include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration for Donar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/registyle.css">
</head>
<body>

<div class="container-fluid">
  <div class="well" style="background-image: url('img/blist.jpg');">
    <h2>Registration For Donate Blood</h2>
  </div>

  <?php
  if (isset($_POST['submitdoner']))
  {
    $sname=$_POST['sname'];
    $sblood_group=$_POST['sblood_group'];
    $ccontact=$_POST['ccontact'];
    $smail=$_POST['smail'];
    $saddress=$_POST['saddress'];
   

    $insertquery="INSERT INTO `blood_bank`( `name`, `blood_group`, `contact_Number`, `email`, `present_address`) VALUES ('$sname','$sblood_group','$ccontact','$smail','$saddress')";
    $insertitem=mysqli_query($connect,$insertquery);

   /*if($insertitem==true)
      {
?>
        <script>
        
            alert('insertion Success !!');
            window.open('adminlogin.php','_self');
        
        </script>

        }*/


    if ($insertitem==true) {
      header('location:blood.php');
    }
  }    
  ?>          
  <form class="form-horizontal" action="" method="POST" style="background-image: url('img/blist.jpg'); color: #fff;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Name :</label>
      <div class="col-sm-5">
        <input name="sname" type="text" class="form-control" id="name" placeholder="Enter your Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Blood Group :</label>
      <div class="col-sm-5">          
        <input name="sblood_group" type="text" class="form-control" id="blood_group" placeholder=" Enter your blood group" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Contact Number</label>
      <div class="col-sm-5">          
        <input name="ccontact" type="text" class="form-control" id="Number" placeholder="Contact Number" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Email</label>
      <div class="col-sm-5">          
        <input name="smail" type="email" class="form-control" id="email" placeholder="email account" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Present Address</label>
      <div class="col-sm-5">          
        <input name="saddress" type="text" class="form-control" id="address" placeholder="present address" required>
      </div>
    </div>
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="submitdoner" type="submit" class="btn btn-success">Submit</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
    </div>

  </form>

</div>
</body>
</html>




  /*if (isset($_POST['submitdoner']))
  {
    $sname=$_POST['sname'];
    $sblood_group=$_POST['sblood_group'];
    $ccontact=$_POST['ccontact'];
    $smail=$_POST['smail'];
    $saddress=$_POST['saddress'];
   

    $insertquery="INSERT INTO `blood_bank`( `name`, `blood_group`, `contact_Number`, `email`, `present_address`) VALUES ('$sname','$sblood_group','$ccontact','$smail','$saddress')";
    $insertitem=mysqli_query($connect,$insertquery);
    if ($insertitem==true) {
      header('location:blood.php');
    }
  }    
  ?>  */
