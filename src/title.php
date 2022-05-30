<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="./react.css"></link>
</head>
<body>
<form class="signin" method="POST" action="" enctype="multipart/form-data">

<input type="file" name="flm"></input>
<input type="submit" value="UPLOAD"></input>    
</form>
<?php
$_SESSION['username']="asdf";
if($_SERVER['REQUEST_METHOD']=='POST')
{  
if(isset($_FILES["flm"]))
   { $title=$_FILES["flm"]["name"]; 
    echo "$title";
    $conn=mysqli_connect("localhost","root","","UFORM");
    $m=mysqli_query($conn,"INSERT INTO dbtitle VALUES (NULL,'$title')");
    if($m){echo "ok";}else{echo "error";}
$location='.'.'/'.$title;
echo $location;
$f=explode('.',$title);
$title=current($f);
$id=1;
    $arr= array (array('title'=>$title,'location'=>$location));
$q=json_encode($arr);
echo $q;
file_put_contents("./data.json",$q);
header("Location:http://localhost:3000/");
}}
?>
</body>
</html>