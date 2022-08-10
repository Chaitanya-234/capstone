<h1>Admin Dashboard</h1>

<?php 

$qq=mysqli_query($conn,"select * from Staff ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:black'><b>Total Number of Staff : $rows</b></h2>";	

?>
