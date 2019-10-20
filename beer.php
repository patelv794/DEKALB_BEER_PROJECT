
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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


</style>
</head>
<body>


<div class="store">
<a href="index.php"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>
<div class="top">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="beers.php">Beer</a></li>
<li><a href="Beverages.php">Beverage</a></li>
</ul>
</div>



<a href="beers.php"><button style="margin-top:30px; margin-right:30px; border-radius:50px; float:right; background-color:black; color:white;" class="checkout"><h3>Got It...</h3></button></a>
<br><br><br>
<center><h2 style="color:brown;"><u><b>NOTE: We Do Delivery ONLY In This Range<b></u></h2>
<h4 style="color:red;"">Please Make Sure That Your Delivery Address Is Under This Range</h4>
<img style="margin-top: 30px; width:100%; height:100%px; margin:10px;" src="store.png">
</center>
<div class="bgBlack">
<?php
 include'footer.php';
 ?>
</div>

</body>
</html>
 