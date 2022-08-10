<?php
$user = 'root';
$password = 'admin'; 

$database = 'capstone'; 
$servername='localhost';
date_default_timezone_set('Asia/Kolkata');
date("Y-m-d");
$mysqli = new mysqli($servername, $user,$password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
$sql = "SELECT * FROM vechicle WHERE `date_time` >= DATE_SUB( CURDATE( ) ,INTERVAL 1 DAY )   ORDER BY id";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Toll Details</title>
    <style>
        body{
              background: url(img/background.jpg);
              background-size: 1500px 900px;
              background-attachment: fixed;
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
        .back{
  width: 20%;
  text-align: center;
  background-color: yellow;
  font-weight: bold;
  font-size: 15px;
  color: black;
  padding: 15px 20px;
  margin-top:  70px;
  margin-right: 100px;
  border: outset;
  border-radius: 20px;
  cursor: pointer;
  outline: 0px
}
    </style>

</head>
  
<body>
    <section>
        <h1>TOLL INFORMATION</h1>
            <table>
            <tr>
                <th>Sr No</th>
                <th>Nominal</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Vechicle Type</th>
                <th>Tax (INR)</th>
                <th>Vechicle NO</th>
                <th>Tax Reciever</th>
                <th>Date and Time</th>
            </tr>
           
            <?php   
            $i=1;
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>

                <td><?php echo $i;?></td>
                <td><?php echo $rows['Nominal'];?></td>
                <td><?php echo $rows['firstName'];?></td>
                <td><?php echo $rows['lastName'];?></td>
                <td><?php echo $rows['Vechicle_Type'];?></td>
                <td><?php echo $rows['tax'];?></td>
                <td><?php echo $rows['vechicleNo'];?></td>
                 <td><?php echo $rows['TaxReceiver'];?></td>
                <td><?php echo $rows['date_time'];?>
            </tr>
            <?php
            $i++;
                }

             ?>

        </table>

    <?php 
 
    $result1 = $mysqli->query("SELECT sum(tax) FROM vechicle  WHERE `date_time`>=  DATE_SUB( CURDATE( ) ,INTERVAL 1 DAY )") or die(mysqli_error());
    while ($rows1 = mysqli_fetch_assoc($result1)) {
    ?>  
    <div >
        <div class="span">
            <div ><table><tr><td>Total Amount Of Collection of Toll Plaza:   <?php echo $rows1['sum(tax)']; ?></td></tr></table></div>
        </div>
    </div>
    <?php } ?>
</div>
    </section>
      <a href="#" onclick="javascript:window.history.back(-2);return false;">
         <button class="back">Back</button>
        </a>
        

</body>
  
</html>