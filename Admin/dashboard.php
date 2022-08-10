<html>
<head>
  <title>Admin!</title>
</head>
</html>
<?php
session_start();
if(!isset($_SESSION['user']))
{
//header('location:index.php');
}
include('../datconfig.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 28px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
  <div class="topnav" id="myTopnav">
  <a href="dashboard.php" class="active">Home</a>
  <a href="dashboard.php?page=Staff">Manage Staff</a>
  <a href="dashboard.php?page=entry" >Entry Details</a>
  <a href="../index.php" style="float: right;">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<div style="padding-left:16px">
  <?php
 @$page= $_GET['page'];
  @$ad= $_GET['ab'];

       if($page!="")
      {
        if($page=="Staff")
      {
        include('Staff_management.php');
      
      }
         elseif($page=="entry")
        {
          include('entry.php');
          }
    }
    else                {
                include('dashboard_home.php');
                }
    ?>

</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>
