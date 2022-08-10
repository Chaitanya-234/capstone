<?php
error_reporting(1);
	include('../datconfig.php');
	extract($_POST);
	if(isset($add))
	{	
				
		
$q=mysqli_query($conn,"select * from staff where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	
		mysqli_query($conn,"insert into staff values('','$nom','$name','$email','$pass','$city','$highwayno',now()),1");
		
	$err="<font color='green'>New Staff Successfully Added.</font>";
	}
	}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Fastag New</title>
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
	</style>
</head>
<script type="text/javascript">

	function back() {
		 window.history.back();
	}
</script>
<body>
  <form class="container" name="Form1" method="post">
   <label><b><?php echo @$err;?></b></label><br><br>
	<label>Name</label><br>
	<select name="nom">
	<option disabled selected>Choose</option>
	<option name="ms">Ms</option>
	<option name="mr">Mr</option>
	<option name="miss">Miss</option>
	<option name="mrs">Mrs</option>
	</select>
	<input type="text" id="fname" name="name" placeholder="Enter Name"><br>
	<label>Email</label><br>
	<input type="text" id="lname" name="email" placeholder="Enter Email">
	<br>
	<label>Password</label><br>
	<input type="password" id="lname" name="pass" placeholder="Enter Password">
	<br>
	<label>City. </label><br>
	<input type="text" id="vno" name="city">
	<br>
	<label>Highway No. </label><br>
	<input type="text" id="vno" name="highwayno">
	<br>
	<input type="submit" name="add" value="Procced to Add" >
	<input type="button" name="" id="pay" value="Back" onclick="back()">
</body>
</html>