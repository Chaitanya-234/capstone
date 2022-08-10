<!DOCTYPE html>
<html>
<head>
	<title>Fastag</title>
	<?php

	$connect=new mysqli('bggdwkmz9yilvfw1m8ww-mysql.services.clever-cloud.com:3306','uge66coybsyu00cz','84Kz2wFGWtX1cjUtvAW5','bggdwkmz9yilvfw1m8ww');

  	if (!$connect)
    { 
    die ("Could not connect: ".mysql_error());
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $stmt="SELECT * FROM fastag WHERE bc LIKE '".$_POST['barcd']."'" or die (mysqli_error());
    $result = $connect->query($stmt);
    //$result= $stmt->fetchALL();
    $rows=$result->fetch_assoc();
    }

	?>
	
	<style type="text/css">
		body{
			background-image: url('img/bk.jpg');
			background-size: auto;
			background-repeat: no-repeat;
		}
		.title{
			text-align: center;
			max-width: 720px;
			padding: 10px;
			margin-left: 320px;
			color: white;
			background-color: blue;
		}
		input[type=text], select, .pay {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;


}
.pay{
	
}
.container {
  position: center;
  border-radius: 20px;
  right: 0;
  margin-top: 55px;
  margin-left: 400px;
  max-width: 500px;
  padding: 50px;
  background-color: white;
}
input[type=submit]{
  width: 45%;
  background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); 
    color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button]  {
  width: 45%;
  color: black;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); 

  cursor: pointer;
}

input[type=submit]:hover,input[type=button]:hover {
background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); 

}
.dis{
	 width: 20%;
    color: black;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
	margin-top: 30px;
	margin-left: 450px;
	
background: linear-gradient(to right, #6A82FB, #FC5C7D); 


}
button:hover{
background: linear-gradient(to right, #fdbb2d, #22c1c3); 


}


	</style>
	<script type="text/javascript">
	
			
			
	
		
		function Pay() {
			document.Form1.action= "connectt.php";
		

				alert("Payment Done");
		}
		/*function printt(){
			var pay=document.getElementById("pay");
			pay.style.visibility="hidden";
			var print=document.getElementById("print");
			print.style.visibility="hidden";
			var home=document.getElementById("hoome");
			home.style.visibility="hidden";
			var bnn=document.getElementById("bttnn");
			bnn.style.visibility="hidden";
			var fet=document.getElementById("bttn");
			fet.style.visibility="hidden";
			var txt=document.getElementById("barcode");
			txt.style.visibility="hidden";

			window.print();
			pay.style.visibility="visible";
			print.style.visibility="visible";
			home.style.visibility="visible";
			bnn.style.visibility="visible";
			txt.style.visibility="visible";
			fet.style.visibility="visible";
			

		}*/
		
		function home(){
			location.href = "Toll.html";
		}

		function fast(){
			

			
			}
		function fasttag(){
			var a=document.getElementById("a1").innerHTML;
			var b=document.getElementById("a2").innerHTML;
			var c=document.getElementById("a3").innerHTML;
			var d=document.getElementById("a4").innerHTML;
			var e=document.getElementById("a5").innerHTML;
			document.getElementById("nommi").selectedIndex=a;
			document.getElementById("fname").value=b;
			document.getElementById("lname").value=c;
			document.getElementById("vtt").selectedIndex=d;
			document.getElementById("vno").value=e;
   		}
		
		
		
		

		
	</script>
</head>
<body>
	<div class="title">
	<h1 ><b>NATIONAL HIGHWAY AUTHORITY OF INDIA</b></h1>
	<h1><b>भारतीय राष्ट्रिय राजमार्ग प्राधिकरण  </b></h1>
	</div>
   <form name="Form1" class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
   	<label>Barcode No</label><br>
	<input type="text" id="barcode" name="barcd"  >
	<input type="submit" id="bttn" name="btn" value="Fetch" onclick="fast()">
	
	<br>
	<label>Name</label><br>
	<select id="nommi" name="nom">
	<option disabled selected>Choose</option>
	<option>Ms</option>
	<option>Mr</option>
	<option>Miss</option>
	<option>Mrs</option>
	</select>
	<input type="text" id="fname" name="firstName" placeholder="First Name">
	<input type="text" id="lname" name="lastName" placeholder="Last Name">
	<br>
	<label>Vechicle Type</label><br>
	<select id="vtt" name="vt">
	<option id="null" disabled selected>Choose</option>
	<option id="car">Car </option>
	<option id="jeep">Jeep</option>
	<option id="van">Van</option>
	<option id="truck">Truck</option>
	<option id="travel">Travels</option>
	<option></option>
	</select><br>
	<label>Applied Tax</label><br>
	<input type="text" name="tax" id="money"  >
	<br>
	<label>Vechicle No</label><br>
	
	<input type="text" id="vno" name="vechicleNo"><br>
	<br>
	<input type="submit" name="" id="pay" value="Procced to Pay" onclick="Pay()">
	<input type="button" name="" id="hoome" style="float:center" value="Back" onclick="home()">



</form>
<button id="bttnn" class="dis" name="btnn" value="" onclick="fasttag()">Display</button>

<h1 id="a1" style="visibility: hidden" ><?php echo $rows['Nom'];?></h1>
<h1 id="a2" style="visibility: hidden" ><?php echo $rows['FirstName'];?></h1>
<h1 id="a3" style="visibility: hidden" ><?php echo $rows['LatName'];?></h1>
<h1 id="a4" style="visibility: hidden" ><?php echo $rows['VecType'];?></h1>
<h1 id="a5" style="visibility: hidden" ><?php echo $rows['VecNo'];?></h1>
        

</body>
</html>
