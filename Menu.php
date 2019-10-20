<?php
session_start();
?>
<html>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
hr {
border-top: 1px solid black;
}


</style>
</head>
<body>

<div class="left">
<ul><span class="brandName">Brand</span><hr>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ur brand..." title="Type in a name" >
<ul id="myUL">
  <li><a href="modelo.php"><img src="img/beer1.jpg">Modelo</a></li>
  <li><a href="SierraNevada.php"><img src="img/beer2.jpg">Sierra Nevada</a></li>
  <li><a href="Corona.php"><img src="img/beer16.jpg">Corona</a></li>
  <li><a href="Heineken.php"><img src="img/beer15.jpg">Heineken</a></li>
  <li><a href="Lagunitas.php"><img src="img/beer3.jpg">Lagunitas</a></li>
  <li><a href="SamuelSmith.php"><img src="img/beer4.jpg">Samuel Smith</a></li>
  <li><a href="Ommegang.php"><img src="img/beer5.jpg">Ommegang</a></li>
 
<br><br><br><br><br><br><br><br><br><br><br>
</ul>
</div>


<div class="top">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="beer.php">Beer</a></li>
  <li><a href="#kegs">Keg</a></li>
<li><a href="#news">Beverage</a></li>
<li style=" float:right;"><a href="cart_list.php"><span style="border: 2px solid white; padding: 20px; border-radius: 20px; background-color:;"><?php echo count($_SESSION['shopping_cart']); ?></span></a></li>
</ul>
</div>

</body>
</html>