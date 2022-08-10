<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<?php
   extract($_POST);
	$con=new mysqli('bggdwkmz9yilvfw1m8ww-mysql.services.clever-cloud.com:3306','uge66coybsyu00cz','Ycf3JxSQv70BF4VAwQ7i','bggdwkmz9yilvfw1m8ww');
  	if (!$con)
    { 
    die ("Could not connect: ".mysql_error());
    }
    if(isset($btn)){
    
    	$sql = "UPDATE fastag SET Balance= Balance+".$balance." WHERE bc='".$barcd."'";
    $con->query($sql);
    }

	?>
	<style type="text/css">
		body{
			background-image: url('img/bk.jpg');
			background-size: auto;
			background-repeat: no-repeat;
			
		}
		input[type=button] {
  width: 45%;
  color: black;
  right: 0;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
   margin: 8px 0;
  background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
  cursor: pointer;
}
		input[type=text],input[type=number] {
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
  right: 0;
  margin: 20px;
  max-width: 800px;
  padding: 50px;
  background-color: white;
}
input[type=submit]{
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
<script type="text/javascript">
  function back() {
    location.href = "Toll.html";
  }
</script>
</head>
<body>
	  <form name="Form1" class="container" method="POST">
   	<label>Barcode No</label><br>
	<input type="text" id="barcode" name="barcd"  >
	<label>Enter Balance</label>
	<input type="text" id="balance" name="balance"  >
	<input type="submit" value="Pay" name="btn">
  <input type="button" class="print" id="print" style="float:right;" value="Back" onclick="back()">
	
	<br>
</form>

</body>
</html>