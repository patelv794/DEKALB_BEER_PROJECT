<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <?php
 include ("BoosetCode.php");
 ?>
<link href="navigation.css" rel="stylesheet" type="text/css">

<style>
</style>
<body>
    
<?php
session_start();
if (!isset($_SESSION["shopping_cart"])){
 header("location:beers.php");
}
?> 


<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
 include ("BoosetCode.php");
 ?>
 <title>Payment</title>
<link rel="icon" href="img/beer16.jpg">
<link rel="stylesheet" href="navigation.css" type="text/css">
<style>

</style>


		</head>
	<body><div class="store">
<a href="index.php"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>
<div class="top">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="beer.php">Beer</a></li>
<li><a href="#non">Beverage</a></li>

</ul>
</div>
<br><br><BR><br>
<center>
<aside class="col-sm-6">
<p><div style="color:red;">Pay At The Door, When Your Delivery In Front Of Door..</div></p>

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
		<i class="fab fa-paypal"> Credit/Debit Card</i> </a></li>
	    <div  style="margin-bottom:130px;"></div>
		<a href="thankyou.php"><button class="subscribe btn btn-primary btn-block" type="button"  style=""> Place Order  </button></a>
	
		

</div> 
</center>
		
<?php

$iddrand = $_SESSION["idderand"]; 
$fnme =$_SESSION["fname"];
$lname = $_SESSION["lname"];
$add = $_SESSION["address"];
$add1 = $_SESSION["address1"];
$ziipp = $_SESSION["zip"];
$citty = $_SESSION["city"];
$tel_nummber = $_SESSION["phone"];
$statta = $_SESSION["statt"];
$messsa = $_SESSION["messages"];

						
						$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Detroit'));
$fdate = $date->format('Y-m-d H:i:s');
	
						
						$date = $fdate; 
$set_12_hr_time = date('h:i:s a m/d/Y', strtotime($date));

	

require ('mysql_connect.php');
$sqqll = "INSERT INTO `Delivery_address`(`delivery_id`, `delivery_fname`, `delivery_lname`, `delivery_Address`, `delivery_Address1`, `delivery_zip`, `delivery_city`, `delivery_state`, `delivery_phone`, `delivery_message`, `date_place_order`) VALUES ('$iddrand','$fnme','$lname','$add','$add1','$ziipp',
'$citty','$statta','$tel_nummber','$messsa','$set_12_hr_time'); ";
$resultt = mysqli_query($connect, $sqqll);

mysqli_close($connect);

?>

</body>
</html>




