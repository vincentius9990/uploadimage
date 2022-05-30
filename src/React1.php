<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>LOGIN</title>
<link rel="stylesheet" href="./react.css"></link>
  </head>
  <body>
<?php
$con=mysqli_connect("localhost","root","","UFORM");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$email=$_POST['email'];
$pass=$_POST['pass'];
$qw="select * from uf1 where EMAIL='$email' and PASSWORD='$pass' ";
$t=mysqli_query($con,$qw);                                      
if(mysqli_num_rows($t)>0)
{
  while($ar=mysqli_fetch_assoc($t))//fetches an array
{//var_dump is used to print array
    if($email==$ar['EMAIL'] && $pass==$ar['PASSWORD'])
{
  $_SESSION['username']="asdf";
  header(Location:"http://localhost:3000/");
}

}}}?>
    <div class="signin">
      <h>LOGIN<h>
</div>
    <form class="signinform" action="" method="post">
<label for="email">EMAIL<label><br>
<input type="email" required name="email" placeholder="Your Name...."></input><br>
<label for="pass">PASSWORD</label><br>
<input type="password" required name="pass" placeholder="Enter Password..."></input><br>
<input type="submit" value="LOGIN"></input>
    </form>
    
</body>
</html>