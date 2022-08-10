<?php
include('../datconfig.php');
	
	$user_id=$_GET['user_id'];
	$status=$_GET['status'];
	if($status)
	{
	mysqli_query($conn,"update staff SET status='0' where id='$user_id'");
	header('location:dashboard.php?page=Staff&gg=update');
	}
	else
	{
	mysqli_query($conn,"update staff SET status='1' where id='$user_id'");
	header('location:dashboard.php?page=Staff&gg=update');
	}
	
	?>