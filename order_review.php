<?php
session_start();
if (!isset($_SESSION["shopping_cart"])){
 header("location:beers.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Order Review</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<style>

.product-image {
  float: left;
  width: 20%;
}

.product-details {
  float: left;
  width: 37%;
}

.product-price {
  float: left;
  width: 12%;
}

.product-quantity {
  float: left;
  width: 10%;
}

.product-removal {
  float: left;
  width: 9%;
}

.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}

.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}

.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}

.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}

/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}

body {

  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: #aaa;
}

.shopping-cart {
  margin-top: -45px;
}

/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}

/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}

.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }

  .column-labels {
    display: none;
  }

  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }

  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }

  .product-price {
    clear: both;
    width: 70px;
  }

  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }

  .product-quantity:before {
    content: 'x';
  }

  .product-removal {
    width: auto;
  }

  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }

  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }

  .product .product-line-price:before {
    content: 'Item Total: $';
  }

  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}
@import "compass/css3";


/* Global settings */
$color-border: #eee;
$color-label: #aaa;
$font-default: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
$font-bold: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';


/* Global "table" column settings */
.product-image { float: left; width: 20%; }
.product-details { float: left; width: 37%; }
.product-price { float: left; width: 12%; }
.product-quantity { float: left; width: 10%; }
.product-removal { float: left; width: 9%; }
.product-line-price { float: left; width: 12%; text-align: right; }


/* This is used as the traditional .clearfix class */
.group:before,
.group:after {
    content: '';
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}


/* Apply clearfix in a few places */
.shopping-cart, .column-labels, .product, .totals-item {
  @extend .group;
}


/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}


/* Body/Header stuff */
.body_ka_size {
  padding: 0px 50px 50px 30px;
}

body {
    
  font-family: $font-default;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: $color-label;
}

.shopping-cart {
  margin-top: -45px;
}


/* Column headers */
.column-labels {
  label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid $color-border;
  }
  
  .product-image, .product-details, .product-removal {
    text-indent: -9999px;
  }
}


/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid $color-border;
  
  .product-image {
    text-align: center;
    img {
      width: 100px;
    }
  }
  
  .product-details {
    .product-title {
      margin-right: 20px;
      font-family: $font-bold;
    }
    .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }
  }
  
  .product-quantity {
    input {
      width: 40px;
      
    }
  }
  
  .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: #a44;
  }
}


/* Totals section */
.totals {
  .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
    
    label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }
    
    .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }
  }
  
  .totals-item-total {
    font-family: $font-bold;
  }
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid $color-border;
  }
  
  .column-labels {
    display: none;
  }
  
  .product-image {
    float: right;
    width: auto;
    img {
      margin: 0 0 10px 10px;
    }
  }
  
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  
  .product-price {
    clear: both;
    width: 70px;
  }
  
  .product-quantity {
    width: 100px;
    input {
      margin-left: 20px;
    }
  }
  
  .product-quantity:before {
    content: 'x';
  }
  
  .product-removal {
    width: auto;
  }
  
  .product-line-price {
    float: right;
    width: 70px;
  }
  
}


/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  
  .product-removal {
    float: right;
  }
  
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  
  .totals {
    .totals-item {
      label {
        width: 60%;
      }
      
      .totals-value {
        width: 40%;
      }
    }
  }
}

#totot_move{
    margin-top:-25px;
    margin-right:20px;
}

#name_move{
    margin-left:-10px;
}
</style>
<link href="navigation.css" rel="stylesheet" type="text/css">

 </head>

<body>
<div class="store">
<a href="index.php"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>
<div class="top">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="beer.php">Beer</a></li>
  <li><a href="kegs.php">Keg</a></li>
<li><a href="#non">Beverage</a></li>

</ul>
</div>
<br><br><BR><br>

<?php
$valid_zip_code = array("11201", "11206", "11238", "11217", "11205", "11216", "11215", "11249", "11231", "11243", "11211", "11241");
$Entered_zip_code = $_SESSION['zip']; 
if (in_array("$Entered_zip_code", $valid_zip_code)) {
    
}else{
   echo "
   <script>alert('We Do Not Delivery To Area : ".$Entered_zip_code."'  )</script>
   <script>window.location.href = 'Address.php'</script>
   ";
}
?>
	
    
        
            
                <div class="col-xs-16 col-sm-6 col-md-6">
 
 <?php
 
 
if(!empty($_SESSION["shopping_cart"]))
					{
$phone = $_SESSION['phone'];
$numbers_only = preg_replace("/[^\d]/", "", $phone);
echo "
<div id='name_move'><address>
                        <strong>".ucfirst($_SESSION['fname']).", ".ucfirst($_SESSION['lname'])."</strong>
                        <br>
                        ".$_SESSION['address'].", #".$_SESSION['address1']."
                        <br>
                        ".$_SESSION['city'].", ".$_SESSION['statt']." ".$_SESSION['zip']."
                        <br>
                        Phone: ".preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "($1)-$2-$3", $numbers_only)."<br> 
                        <strong>Message: <br><div style='color:green'>".$_SESSION['messages']."</div></strong>
                    </address>
                </div></div>";




?>


                
                </div>
            
           
                </span>
<?php
 require ('mysql_connect.php');
					if(empty($_SESSION["shopping_cart"]))
					{
					}
					elseif(!empty($_SESSION["shopping_cart"]))
					{
					$total =0;
					echo"<table class='table table-hover'>
                    
                       
     
                    
                    <tbody>";
					foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					$iddvar = $values["item_id1"];
					$qtyyy = $values["item_quantity"];
		
				$query = 'SELECT * FROM All_Beer where id = '. $iddvar;

				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
				$iddvar = $values["item_id1"];
					$qtyyy = $values["item_quantity"];

$query = 'SELECT * FROM All_Beer where id = '. $iddvar;

				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
				
				
					while($row = mysqli_fetch_array($result))
					{
$pricees = $row['price'];
					$total_result = $pricees * $qtyyy;
					$total = $total + $total_result;
					$grand_total = number_format($total_result , 2);
					
echo "<tr>
	 	<td><em></em><img style='margin-left:10px;' height='100px' src='BeerIMG/".$row['image']."' style='width:100px;'>
        </h4></td>
    	<td style='text-align:left;'>".ucfirst($row['name'])."<br>".ucfirst($row['size'])."</td>
    	<td class='col-md-1 text-center' >$".$row['price']."</td>
       
    	<td class='col-md-1 text-center' >".$qtyyy."</td>
    	<th></th>
        <td class='col-md-1 text-center' >$".$grand_total."</td></tr>";
}
}
} 
}
}

?>


<tr>
	<td>   </td>
    <td>   </td>
    <td class="text-right">
    </td>
                           
                        </tr>
                        
                    </tbody>
                    
                </table>
                <?php
  $tax = 0.08875;
  $withTAX = $total * $tax;
  $grand_total = $total + $withTAX;
  echo"<div id='totot_move'>
  <div class='totals'>
    <div class='totals-item'>
      <label>Subtotal</label>
      <div class='totals-value' id='cart-subtotal'>".number_format($total, 2)."</div>
    </div> 
     <div class='totals-item'>
      <label>Tax</label>
      <div class='totals-value' id='cart-tax'>".number_format($withTAX,2)."</div>
    </div>
    <div class='totals-item'>
     
      
    <div class='totals-item totals-item-total'>
      <label>Grand Total</label>
      <div class='totals-value' id='cart-total'>".number_format($grand_total,2)."</div>
    </div></div>
 
  
";
	
       
					
			?>
                <a href="payment.php"><button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></a><br>
                 <a href="beers.php"><button type="button" class="btn btn-success btn-lg btn-block" style="margin-bottom:50px";>
                    <span class="glyphicon glyphicon-chevron-left"></span> Continue Shopping  
                </button></a>
                </td>
            </div>
        </div>
    </div>
<?PHP
}else{
echo"<h3 style='color:red; float:Center;'>Cart is Empty</h3>";
}
?>
</body>
</html>
