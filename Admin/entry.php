<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CHECK</title>
<style>
body {
  font-family: "Lato", sans-serif;
  background: url(img/background.jpg);
  background-size: 1500px 900px;
  background-attachment: fixed;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
button{
  width: 100px;
   margin-top: 50px;
    
   height: 100px;
    color: white;
    margin-bottom: 50px;
     font-size: 18px;
background: -webkit-linear-gradient(to right, #1D2671, #C33764);
background: linear-gradient(to right, #1D2671, #C33764); 
  padding: 15px 20px;
  border: none;
  cursor: pointer;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  color: white;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard.php?page=entry&en=day"  >Day</a>
  <a href="dashboard.php?page=entry&en=week"  >Week</a>
  <a href="dashboard.php?page=entry&en=month"  >Month</a>
  <a href="dashboard.php?page=entry&en=year"  >Year</a>
  <a href="dashboard.php?page=entry&en=table"  >ALL</a>
</div>   
<div>    
<span style="font-size:30px;cursor:pointer;color: red;background: white" onclick="openNav()">&#9776; <b>Menu</b></span>
  <br>

   <?php 
                @$inf=$_GET['en'];
                if($inf!="")
                {
                  if($inf=="day")
                    {
                      include('day.php');
                    }
                    elseif($inf=="week")
                    {
                      include('week.php');
                    }
                    elseif($inf=="month")
                    {
                      include('month.php');
                    }
                    elseif($inf=="year")
                    {
                      include('year.php');
                    }
                     elseif($inf=="table")
                    {
                      include('alltb.php');
                    }
                }
                ?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
   
</body>
</html> 