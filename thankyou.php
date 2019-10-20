<?php
session_start();
session_destroy();

?>



<!DOCTYPE html>
<html>
<head>
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
  <li><a href="beer.php">Beer</a></li>
  <li><a href="#kegs">Keg</a></li>
<li><a href="#non">Beverage</a></li>
</ul>
</div>



<?php 
require ('mysql_connect.php');

					if(empty($_SESSION["shopping_cart"]))
					{
						
					}
					elseif(!empty($_SESSION["shopping_cart"]))
					{
					$total =0;
				
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
						    $randd = rand(232,2223);
						$iddrand = $_SESSION["idderand"]; 
					$iddvar = $values["item_id1"];
					$qtyyy = $values["item_quantity"];
					$total_pricee = $_SESSION["totle"];
					$total_tax = $_SESSION["taxx"];
					$total_subb = $_SESSION["subtotaal"];
					$itm_img = $values["item_img"];
					$itm_nnam = $values["item_name"];
					$itm_nameee = addslashes($itm_nnam);
					$itm_sizze = $values["item_size"];
					$itm_pricce = $values["item_price"];
						
						
						$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Detroit'));
$fdate = $date->format('Y-m-d H:i:s');
	
						
						$date = $fdate; 
$set_12_hr_time = date('h:i:s a m/d/Y', strtotime($date));

	
					
$sqliii = "INSERT INTO `Delivery_order`(`order_id`, `Order_delivery_id`, `all_beer_id`, `order_img`, `order_name`, `order_size`, `qty`, `order_price`, `sub_totall`, `order_tax`, `total_paid`, `order_date`) VALUES ('$randd','$iddrand','$iddvar','$itm_img','$itm_nameee','$itm_sizze','$qtyyy','$itm_pricce','$total_subb','$total_tax','$total_pricee','$set_12_hr_time');";
				$resullt = mysqli_query($connect,$sqliii);
			if($sqliii)
			{
			
echo '<script>window.location="thankyou.php"</script>';

			} 
				}
				}
				
				mysqli_close($connect);
?>
<?php
echo"<center><h3><font color='red'>Thank Your For The Shopping!!!</font></h3></center>";
echo "
<a href='beers.php'><button  class='checkout'>Wanna More Shopping</button></a>
"
;
?>

</body>
</html>
