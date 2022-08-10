<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<header>Leave Application</header>
<!-- CSS -->
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 30em;
padding: 1em;
margin-left: 450px;
margin-top:70px;
border: 1px solid #ccc;
}
header{
	font-family: sans-serif;
	font-size: 40px;
	font-weight: bold;
	text-align: center;
}
.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm label {
text-align: left;
display: block;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
float: right;
width: 60%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm input[type="radio"],
.myForm input[type="checkbox"] {
margin-left: 40%;
}

.myForm input[type="submit"] {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 40%;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
</style>

</head>
<body>

<form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">

<p>
<label>Name
<input type="text" name="customer_name" required>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="phone_number">
</label>
</p>

<p>
<label>Email 
<input type="email" name="email_address">
</label>
</p>


<fieldset>
<legend>Reason</legend>
<p><label class="choice"> <input type="radio" name="extras" value="baby"> Vaccation </label></p>
<p><label class="choice"> <input type="radio" name="extras" value="wheelchair"> Sick </label></p>
<p><label class="choice"> <input type="radio" name="extras" value="tip"> Other </label></p>
</fieldset>

<p>
<label>Leave Start
<input type="datetime-local" name="pickup_time" required>
</label>
</p>
<p>
<label>Leave End
<input type="datetime-local" name="pickup_time" required>
</label>
</p>	



<p>
<label>Reason
<textarea name="comments" maxlength="500"></textarea>
</label>
</p>
<p><input type="submit" value="Take A Leave" name=""></p>
</form>
</body>
</html>