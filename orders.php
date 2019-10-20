<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 <?php
 include ("BoosetCode.php");
 ?>
<link href="navigation.css" rel="stylesheet" type="text/css">

<style>
 
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url('https://fonts.googleapis.com/css?family=Play');



.WHOLE_PAGE_TOP_TO_END{
margin:20px;

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
	


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 3px;
}

tr:nth-child(even) {
  background-color: ;
}



.endds{
margin-bottom:100px;
}
.logo_Beer img{
width: 400px;
height: 70px;
margin-left:400px;
margin-bottom:-50px;
}

.order_id_button{
 border: none;
  padding: 5px 20px;
  text-align: center;
  background:none;
   color: blue;
  
}
.order_id_button:hover{
text-decoration: underline;

}

</style>
</head>
<body>


<div class="store">
<a href="#"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>
<div class="top">
<ul>
  <li><a href="#">All Orders</a></li>
  <li><a href="inventory.php">Inventory</a></li>
  
</ul>
</div>

<?php

require("mysql_connect.php");
$all_order = "SELECT * FROM Delivery_address  
ORDER BY Delivery_address.date_place_order  DESC;";
$runn_orders = mysqli_query($connect, $all_order);
if(mysqli_num_rows($runn_orders) > 0)
{
echo "<table><tr>
    <th>Order Number (Print)</th>
    <th>Name</th>
    <th>Date/Time</th>
    <th>Sub Total</th>
    <th>Tax</th>
    <th>Total</th>
  </tr>
  ";
while($row = mysqli_fetch_assoc($runn_orders))
{

$Delive_id = $row['delivery_id'];
$Delive_fname = ucwords($row['delivery_fname']);
$Delive_lname = ucwords($row['delivery_lname']);
$Delivery_date = $row['date_place_order'];
//convert time to 12h



$sqllre121 = "SELECT * FROM `Delivery_order` where Order_delivery_id = '$Delive_id' ";
$resultorder = mysqli_query($connect, $sqllre121);
if(mysqli_num_rows($resultorder) > 0)
{

while($row = mysqli_fetch_assoc($resultorder))
{
$imges_order = $row['order_img'];
$Delive_id = $row['delivery_id'];
$order_id = $row['Order_delivery_id'];
$order_all_beer = $row['all_beer_id'];
$order_qty = $row['qty'];
$order_img = $row['order_img'];
$order_name = $row['order_name'];
$order_size = $row['order_size'];
$product_price = $row['order_price'];
$order_subb = $row['sub_totall'];
$order_taxx = $row['order_tax'];
$order_total_paid = $row['total_paid'];
$order_date_place = $row['order_date'];
 
}
echo "<tr>

";
?>
<form action="pdf/invoice.php" method="get" target="_blank">
<td>

<input id="<?php echo $order_id ?>"  onclick="setColor('<?php echo $order_id ?>','red');" class="order_id_button" type="submit" name="order_idd_whole" value="<?php echo $order_id ?>" onclick="document.getElementById('id01').style.display='block'" style='width:auto;' target="_blank">
</td>
</form> 
<?php 


$date = $order_date_place; 
$set_12_hr_time = date('h:i:s a m/d/Y', strtotime($date));

//

echo "
<td> ".$Delive_fname.", ".$Delive_lname."</td>
<td> ".$set_12_hr_time."</td>
<td>".$order_subb."</td>
<td>".$order_taxx."</td>
<td> $".$order_total_paid."</td>
</tr>";
}


}echo "</table>";

}

mysqli_close($connect);
?>

<script>
function setColor(k,v){
 document.getElementById(k).style.backgroundColor = v;
}
</script>

</body>
</html>





























