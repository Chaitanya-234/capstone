
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Home</title>
	<style type="text/css">

  body{
  padding: 30px;
  background: url(img/back.jpg);
  background-repeat: no-repeat;;
  background-size: 1500px 900px;
		}
.toll {
  float: left;
  position: left;
  margin-top: 190px;
  margin-left: 5px;
  width: 660px;
  height: 160px;
  padding: 50px;
  text-align: center;
  cursor: pointer;
  color: black;
  border: none;

   font-size: 39px;
     text-shadow: 1px 1px 2px violet, 0 0 1em blue, 0 0 0.2em blue;
     background: #f12711;  
 
background: linear-gradient(to right, #f5af19, #f12711); 

   background-repeat: no-repeat;
   background-attachment: fixed;



}
.check{
  width: 600px;
   margin-top: 190px;
   height: 160px;
    color: black;
     font-size: 39px;
     text-shadow: 1px 1px 2px violet, 0 0 1em blue, 0 0 0.2em blue;
     background: #f12711; 
background: linear-gradient(to right, #f5af19, #f12711); 
  border: none;
  cursor: pointer;
  outline: 0px;

}
.help{
  float: left;
  position: left;
  margin-top: 10px;
  margin-left: 5px;
  width: 660px;
  height: 160px;
  padding: 50px;
  text-align: center;
  font-size: 39px;
  text-shadow: 1px 1px 2px violet, 0 0 1em blue, 0 0 0.2em blue;
  cursor: pointer;
  color: black;
   border: none;
   
background: linear-gradient(to right, #f5af19, #f12711); 
  
   outline: 0px;

}
.about{
 width: 600px;
   margin-top: 10px;
   height: 160px;
    color: black;
     font-size: 39px;
    text-shadow: 1px 1px 2px violet, 0 0 1em blue, 0 0 0.2em blue;
background: #f12711; 
 
background: linear-gradient(to right, #f5af19, #f12711); 
     padding: 15px 20px;
  border: none;
  cursor: pointer;
  outline: 0px;

}
input[type=button]:hover {
  
background: linear-gradient(to right, #0575E6, #00F260); 


}

  marquee{
      font-size: 55px;
       text-shadow: 2px 2px red;
      font-weight: 800;
      color: black;
      font-family: sans-serif;
      }

	</style>
  <script type="text/javascript">
    
    function toll() {
      // body...
      location.href="Toll.html";
    }
    function data() {
      // body...
      location.href="chek.html";
    }
    function logout() {

      // body...
      location.href="index.php";
    }
    function staff(){
      location.href="Staff/prof_staff.php";
    }

  </script>
</head>
<body>
  <marquee width="100%" direction="left"  height="90px">
    <b>भारतीय राष्ट्रिय राजमार्ग प्राधिकरण  </b>
</marquee>
<form action="index.php" method="POST">

	<input type="button" value="TOLL" class="toll" onclick="toll()" >
	<input type="button" class="check" style='float: right;' name="" onclick="data()" value="Check Data">
  <input type="button" class="help" value="Manage Profile" name="change" onclick="staff()">
  <input type="button" class="about" style='float: right;' value="Logout" onclick="logout()" >
</form>
</body>
</html>
