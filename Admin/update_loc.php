
<style type="text/css">
table{
            font-size: large;
            margin-left: 180px;
            border: 2px solid black;
            text-align: center;
        
}
td {
            color: black;
            background-color: white;
            border: 1px solid black;
        }
        th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th{
        		color: white;
            background-color: black;

        }
  
        td {
            font-weight: lighter;
        }
	
</style>	


<?php
	echo "<table class='table' >";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Highway No</th>";
	echo "<th>Rute</th>";	
	echo "<th>Distance (KM)</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from location");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Highway_no']."</td>";
		echo "<td>".$row['Rute']."</td>";
		echo "<td>".$row['Distance (KM)']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?page=Staff&gg=update&id=$row[id]&gg=editstaff'><span class='glyphicon glyphicon-pencil' style=color:green;><b>Edit</b></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;><b>Delete</b></span></a></td>";
		echo "</tr>";
		$i++;
	}

	
?>