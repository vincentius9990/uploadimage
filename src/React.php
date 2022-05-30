<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>SIGNIN</title>
<link rel="stylesheet" href="./react.css"></link>
  </head>
  <body>
  <?php
 
$conn=mysqli_connect("localhost","root","","UFORM");
/*if($conn)
{
    echo "connection established";
}
else{
    echo"connection failed".mysqli_connect_error();
}*/
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
if($pass==$pass1)
{$SQ="INSERT INTO uf VALUES(NULL,'$email','$pass','$pass1')";                                                                                                                                
$sql="INSERT INTO uf1 VALUES(NULL,'$email','$pass')";
mysqli_query($conn,$sql);
mysqli_query($conn,$SQ);
$_SESSION['username']="asdf";
header(Location:"http://localhost:3000/");
}
} 
?>
    <div class="signin">
      <h>CREATE ACCOUNT<h>
</div>
    <form class="signinform" action="" method="POST">
<label for="email">EMAIL<label><br>
<input type="email" required name="email" placeholder="Your Email...."></input><br>
<label for="pass">PASSWORD</label><br>
<input type="password" required name="pass" placeholder="Enter Password..."></input><br>
<label for="pass1">RENTER PASSWORD</label><br>
<input type="password" required name="pass1" placeholder="Confirm Password"></input><br>
<input type="submit" value="signin"></input>
    </form>
  </body>
</html>