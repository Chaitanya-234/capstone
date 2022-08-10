<?php
include('../datconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from staff where id='$info'");
	header('location:dashboard.php?page=Staff&gg=update_staff');
?>