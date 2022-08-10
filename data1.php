<?php 
include('dbconfif.php');
$sql=mysqli_query($conn,"select * from demopy");
$result = $mysqli->query($sql);
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
        body{
             background-color: white;
        }

        table {
            margin: 0 auto;
            font-size: large;
            border: 2px solid black;
            background-size: auto;
            background-repeat: no-repeat;
        }
        h1 {
            text-align: center;
            margin-left: 480px;
            margin-right: 420px;
            height: 45px;
            color: black;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            text-decoration: blink;
            background-color: white;
            border-radius: 10px;
        }
  
        td {
            color: white;
            background-color: red;
            border: 1px solid black;
        }
        th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: yellow;

        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <section>
        <h1>TOLL INFORMATION</h1>
            <table>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Gender </th>
                
            </tr>
           
            <?php   
            
                while( $row=mysqli_fetch_array($sql))
                {
             ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['branch'];?></td>
                <td><?php echo $rows['gender'];?></td>
                
            </tr>
            <?php
       
                }

             ?>

</body>
</html>
