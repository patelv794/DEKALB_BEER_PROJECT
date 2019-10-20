<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- mobile-->
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">

 <?php
 include ("BoosetCode.php");
 ?>
<link href="navigation.css" rel="stylesheet" type="text/css">
<style>
 
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url('https://fonts.googleapis.com/css?family=Play');

body {
margin:0;

}



.bc_black {
margin-top: -80px;
	background-color: black;
	height: 525px;
	display: block;
	width: 100%;
}
h2{
	text-align: center;
	color: white;	
	margin-top:110px;
font-family: 'Play', sans-serif;

}
h6 {
	padding-bottom: 90px;
	text-align: center;
	color: white;
font-family: 'Play', sans-serif;
}




   hr { 
    display: block;
    margin-top: 250px;
    margin-bottom: 0em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset white;
    border-width: 1px;
  
}

.store {
background-color: black;
width:100%;
height:100px;
}

.store a{

text-decoration:none;  
list-style-type: none; 
color: white;
text-align: center;
}
.store h1{
margin-top: 0px;
padding-top:25px;
}
.footers {
	background-color: black;
	height: 200px;
	width: 100%;
	margin-top: 200px;
	color: white;
	padding-top: 20px;
}

.footers a{
text-decoration: underline;
color: red;

}
.footers a:hover{
color: white;
}

/*Contact Form*/
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: white;
    color: black;
    font-size: 20px;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

input[type=submit]:hover {
    background-color: #45a049;
    
}

.container {
    border-radius: 5px;
    background-color: black;
    padding: 20px;
    margin-top: -15px;
    margin-bottom: 30px;
    width: 70%;
    margin-left: 180px;
    color: white;
}


.contactName {
color: green;
padding-left: 200px;
padding-top: 20px;
font-size: 30px;
}
</style>
</head>
<body>
 

<div class="top">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="beer.php">Beer</a></li>
<li><a href="Beverages.php">Beverage</a></li>

</div>


<div class="store">
<a href="index.php"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>

<div id="storeimg">
<img height="500px" width="100%" src="img/fortgreen1.png" alt="store">
</div>


<!--<div style="padding:0px;margin-top:0px;">-->
<div class="bc_black"><br>
<h2>186 Dekalb Ave, Brooklyn, NY 11205</h2>
<div style="padding:0px;margin-top:-15px;">
<h6>Open Store: 7:00am - 1:00am
<br><br>Delivery Time: 8:30am - 11:30pm<br><br><span style="font-size: 20px;">For Beer "keg" Please book one Week Early.</span><br><br>Call@ : (718)-858-4438
</h6>
<h6>
</h6>
</div>




</body>
</html>
