<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_staff.php?id='+id;
     }
}
</script>
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
	echo "<th>Nominal</th>";
	echo "<th>Name</th>";	
	echo "<th>Email</th>";
	echo "<th>Password</th>";
	echo "<th>Plaza City</th>";
	echo "<th>Highway No</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from staff");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Nomi']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['Plaza_city']."</td>";
		echo "<td>".$row['Highway_No']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?page=Staff&gg=update&id=$row[id]&gg=editstaff'><span class='glyphicon glyphicon-pencil' style=color:green;><b>Edit</b></span></a></td>";
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;><b>Delete</b></span></a></td>";
		
		if($row['Status'])
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['Status']."'><span  style=color:red;>Deactive</span></a></td>";
		}
		else
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['Status']."'><span style=color:green;>Active</span></a></td>";
		}
		$i++;
		echo "</tr>";
	}

	
?>