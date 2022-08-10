<?php 
include('datconfig.php');
session_start();
  extract($_POST);
if(isset($loggin))
{
  if($ee=="" || $pass=="")
  {
  $err="<font color='red'>fill all the fileds first</font>";  
  }
  else
  {

$sql=mysqli_query($conn,"select * from staff where email='$ee' and password='$pass' ");
$sqll=mysqli_query($conn,"select * from admin where email='$ee' and password='$pass' ");
$r=mysqli_num_rows($sql);
$re=mysqli_num_rows($sqll);
if($r==true )
{
  $row=mysqli_fetch_array($sql);
  $em=$row['email'];
  $n=$row['Name'];
  $city=$row['Plaza_city'];
  $_SESSION['user']=$n;
   $_SESSION['city']=$city;
   $_SESSION['email']=$em;
   if($row['Status']==1){
header('location:Home.php');
}
else{
  $err="<font color='red'>This Staff are in Leave</font>";
}
}
elseif($re==true){

  header('location: Admin/dashboard.php');
}
else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
<header>Authentication Login For Tool Plaza</header>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E); 
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=button] {
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
input[type=submit] {
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

input[type=button]:hover {
  opacity: 0.7;
}
.imgcontainer {
 
  margin-left: 140px;
  margin-bottom: 30px;
}

img.avatar {
  width: 50%;
  border-radius: 30%;
}
.container {
  width: 30%;
  margin-top: 80px;
  margin-left: 450px;
  padding: 16px;
  border: 2px solid black;
  background-image: url("img/log.jpg");
  background-repeat: no-repeat;
  background-size: 300%;
}
header{
   font-family: Georgia, serif;
   text-align: center;
   font-size: 50px;
   color: #0F2027;  
}
</style>
</head>
<body>
<form class="container" method="post">
  <label><?php echo @$err;?></label><br>
<div class="imgcontainer">
  <img src="img/avtar.png" alt="Avatar" class="avatar">
</div>
    <label><b>Email</b></label><br>
    <input type="text" required autofocus="" name="ee">
    <label ><b>Password</b></label>
    <input type="password" required name="pass">
    <input type="submit" value="Login" name="loggin">
</form>
</body>
</html>
