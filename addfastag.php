<?php 
$conn =new mysqli('localhost','root','','capstone');
$connect=new mysqli('bggdwkmz9yilvfw1m8ww-mysql.services.clever-cloud.com:3306','uge66coybsyu00cz','84Kz2wFGWtX1cjUtvAW5','bggdwkmz9yilvfw1m8ww');

	$firstName =$_POST['firstName'];
	$lastName =$_POST['lastName'];
	
	if($_POST['nom']=='Ms'){

	 $nomi ='1';
}

 else if ($_POST['nom']=='Mr') {
 	 $nomi = '2';
 	 
 }
 else if ($_POST['nom']=='Mrs') {
 	 $nomi = '4';
 }
 else if ($_POST['nom']=='Miss') {
 	 $nomi = '3';
 }


		if($_POST['vt']=='Car'){

	 $option ='1';
}

 else if ($_POST['vt']=='Jeep') {
 	 $option = '2';
 }
 else if ($_POST['vt']=='Van') {
 	 $option = '3';
 }
 else if ($_POST['vt']=='Truck') {
 	 $option = '4';
 }
 else if ($_POST['vt']=='Travels') {
 	$option = '5';
 }
	$amount=$_POST['amount'];
	$vechicleNo =$_POST['vechicleNo'];
	
	$x=rand(0,9999);
	$p= md5($x);
	$barcode=substr($p,1,8);
	echo "$barcode $vechicleNo";

	
	if ($connect->connect_error) {
		echo "$conn->connect_error";
		die('connectio failed ...'.$conn->connect_error);
	}else{
		echo "Connection Done...............";
		$stmt=$connect->prepare("insert into fastag(bc,Nom,FirstName,LatName,VecType,VecNo,balance) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssi",$barcode,$nomi,$firstName,$lastName,$option,$vechicleNo,$amount);
		$execval = $stmt->execute();
		echo $execval;
		echo "\n Data Saved";
		$stmt->close();
		$connect->close();
		header("Location: Toll.html",true,301);
	}

?>