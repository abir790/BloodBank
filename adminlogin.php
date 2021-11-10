<?php
include('dbcon.php');

 
  if(isset($_POST['login'])){

    $sername=$_POST['uname'];
    $assword=$_POST['pass'];
    
    $qry="SELECT * FROM `admin` WHERE `username` ='$sername' AND `password` ='$assword'";
    $run=mysqli_query($connect,$qry);
    $row = mysqli_num_rows($run);
    if($row <1)
      {
?>
        <script>
        
            alert('Username or Password not match !!');
            window.open('adminlogin.php','_self');
        
        </script>
        <?php
        }
        else
        {
        $data=mysqli_fetch_assoc($run);
        
        // $adid=$data['adid'];
        
        // session_start();
        // $_SESSION['uid']=$adid;
        header('location:adminblood.php');
        
        
        }
        
}
    ?>  


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/adlog.css">
<a href="index.php">Back to home page</a>
</head>
<body>


<h2>Admin Login</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="login" value="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>


    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
