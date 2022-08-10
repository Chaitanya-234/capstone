<?php
session_start();
	include('../datconfig.php');
	extract($_POST);
	
	if(isset($update))
	{	
	
	mysqli_query($conn,"update staff set Name='$name',email='$email',password='$pass',Plaza_city='$city',Highway_No='$hno' where email='".$_SESSION['email']."';");	

$err="<font color='green'>Faculty Details updated</font>";

	}
	
$con=mysqli_query($conn,"select * from staff where email='".$_SESSION['email']."';");
$res=mysqli_fetch_assoc($con);	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Staff</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-image: url('../img/homeback.jpeg');
			background-size: auto;
			 background-size: 1350px 1100px;
			background-repeat: no-repeat;
		}
		.title{
			text-align: center;
			max-width: 720px;
			padding: 10px;
			margin-left: 265px;
			color: white;
			background-color: blue;
		}
		input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.container {
  position: center;
  border-radius: 20px;
  margin-top: 80px;
  margin-left: 300px;
  max-width: 600px;
  padding: 50px;
  background-color: white;
}
input[type=submit]:hover,input[type=button]:hover {
  background: #833ab4; 
background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); 
}
		input[type=submit]{
  width: 45%;
  background: #5433FF;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

		input[type=button]{
  width: 45%;
  background: #5433FF;  
  background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); 
  background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); 
    color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
</head>
<script type="text/javascript">

	function back() {
		 location.href="../Home.php";
	}
</script>
<body>

   <form class="container" name="Form1" method="post">
   <label><b><?php echo @$err;?></b></label><br><br>
	<label>Name</label><br>
	<input type="text" id="fname" value="<?php echo @$res['Name'];?>" name="name" placeholder="Enter Name"><br>
	<label>Email</label><br>
	<input type="text" id="lname" readonly value="<?php echo @$res['email'];?>" name="email" placeholder="Enter Email">
	<br>
	<label>Password</label><br>
	<input type="password" id="lname" value="<?php echo @$res['password'];?>" name="pass" placeholder="Enter Password">
	<br>
	<label>City </label><br>
	<input type="text" id="vno" readonly value="<?php echo @$res['Plaza_city'];?>" name="city">
	<br>
	<label>Highway No. </label><br>
	<input type="text" id="vno" readonly value="<?php echo @$res['Highway_No'];?>" name="hno">
	<br>
	<input type="submit" name="update" value="Update" >
	<input type="button" name="" id="pay" value="Back" onclick="back()">
</form>
</body>
</html>