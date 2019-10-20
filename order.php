<!--
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 *{
 font-family: arial, sans-serif;
 }

.WHOLE_PAGE_TOP_TO_END{
margin:20px;

}

.date_place{
float: right;
margin-right: 100px;
font-size: 18px;
color:brown;
}

h3{
font-weight: bold;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.total_order_pricess h5{
float: right;
margin-top:200px;
margin-bottom:-200px;
margin-right:50px;
}

div.total_tax_sub {
  position: absolute;
  right: 0px;  
  width: 210px;
  height: 120px;
  border: none;
}

.logo_Beer img{
width: 400px;
height: 70px;
margin-left:400px;
margin-bottom:-50px;
}
.totle_due{
color: green;
}
</style>
</head>
<body>


<script>
function myFunction() {
  window.print();
}
</script>

<div class="WHOLE_PAGE_TOP_TO_END">

<?php
require("mysql_connect.php");

$heer = $_GET['order_id_total'];

$sqllre = "SELECT * FROM `Delivery_address` Where delivery_id = '$heer';
;";
$resultfetch = mysqli_query($connect, $sqllre);
if(mysqli_num_rows($resultfetch) > 0)
{

while($row = mysqli_fetch_assoc($resultfetch))
{
$Delive_id = $row['delivery_id'];
$order_id = $row['Order_delivery_id'];
$order_all_beer = $row['all_beer_id'];
$order_qty = $row['qty'];
$order_total_paid = $row['total_paid'];
$order_date_place = $row['order_date'];
$Delive_fname = ucwords($row['delivery_fname']);
$Delive_lname = ucwords($row['delivery_lname']);
$Delive_add = $row['delivery_Address'];
$Delive_add1 = $row['delivery_Address1'];
$Delive_zip = $row['delivery_zip'];
$Delive_city = $row['delivery_city'];
$Delive_state = $row['delivery_state'];
$Delive_phone = $row['delivery_phone'];
$Delive_message = $row['delivery_message'];
$Delive_date_place = $row['date_place_order'];
$Delivery_time = $row['time_place_order'];

//convert time to 12h
$military_time = $Delivery_time;
$standard_time = date('h:i:s A', strtotime($military_time));

//convert date to mm-dd-yyyy 
$originalDate = $Delive_date_place;
$newDate = date("m-d-Y", strtotime($originalDate));

////
$sqllre121 = "SELECT * FROM `Delivery_order` where Order_delivery_id = '$heer' ";
$resultorder = mysqli_query($connect, $sqllre121);
if(mysqli_num_rows($resultorder) > 0)
{
echo "<table>  <tr>

<td>Items</td>
<td>Qty</td>
<td>Product #</td>
<td>Products</td>
<td>Price</td>
<td>Qty</td>
<td>Total</td>


";
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

$order_total_paid = $row['total_paid'];
$order_date_place = $row['order_date'];

echo "
<tr>

    <th><img width='50px' height='70px' src='beer/".$imges_order."'/></th>
    <th>".$order_qty."</th> 
    <th>".$order_all_beer."</th>";
    
    // calling produts table item name
   
 
 $total_price_per_items = $product_price * $order_qty;
 $tax = 0.08875; 
 $Sub_Total += $total_price_per_items;
 $total_TAX = $Sub_Total * $tax;
 
 echo "<th>".$order_name.", (".$order_size.")</th>";
 
//
    
   echo "
    <th>$".$product_price."</th>
    <th>".$order_qty."</th>
    <th>$".$total_price_per_items."</th>
  </tr>
 </div>";
 
}echo "
<th>
<div class='total_tax_sub'>

<h3>Sub Total: $".$Sub_Total."<br><br>
Tax: $".number_format($total_TAX,2)."<br><br>
<dic class='totle_due'>Total DUE: $".$order_total_paid."</div></h3>

</div>
</th>	
<div class='endds'></div>
";

}


echo "
<br><br>
<div class='logo_Beer'><img src='Final_logo.png' /></div>
<button onclick='myFunction()'>Print this page</button>

<h3>Order # ".$order_id."</h3>
<h4>".$Delive_fname.", ".$Delive_lname."</h4>
<b>Delivery To:</b> <br>".$Delive_add.", <br>APT,UNIT,FLOOR # <u>".$Delive_add1."</u><br>
".$Delive_city.", ".$Delive_state." ".$Delive_zip."<br>

Phone#<a style='color:blue' href='tel:+".$Delive_phone."'><u>".$Delive_phone."</u></a>
	
	
	
<div class='date_place'>
<b>Order Placed On:<br> </b><u>".$standard_time." <b>ON </b>".$newDate."</u>
</div>
<br><BR>
<h4>Special Instructions:</h4><span style='color:green;'>".$Delive_message."</span><br><br><br>	

";
}
}

mysqli_close($connect);
?>
</div>
</body>
</html>

-->


<?php
$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Detroit'));
$fdate = $date->format('Y-m-d H:i:s');

echo $fdate;
?>

