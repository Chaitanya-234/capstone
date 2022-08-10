<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Vechile</title>
	<?php
	$user = 'root';
	$password = ''; 
	$database = 'capstone'; 
	$servername='localhost';
	$con = new mysqli($servername, $user,$password, $database);

  	if (!$con)
    { 
    die ("Could not connect: ".mysql_error());
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $stmt="SELECT * FROM fastag WHERE bc LIKE ".$_POST['barcd'] or die (mysqli_error());
    $result = $con->query($stmt);
    //$result= $stmt->fetchALL();
    $rows=$result->fetch_assoc();
    }

	header("Location: Vechicle.php",true,301);

	?>
</body>
</html>