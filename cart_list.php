<?php 
session_start();

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				// echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart_list.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
 include ("BoosetCode.php");
 ?>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
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
  padding: 0px 30px 30px 20px;
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
  background-color: ;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: ;
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
  width:100%;
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
body {
  padding: 0px 30px 30px 20px;
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
    background-color: ;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: ;
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


</style>
<link href="navigation.css" rel="stylesheet" type="text/css">

 
<script type="text/javascript">
                    function logout(){
                
session_destroy();
            }
</script>

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
<br><br><BR><br>
<div class="shopping-cart">

  
<?php require ('mysql_connect.php');

					if(empty($_SESSION["shopping_cart"]))
					{
						echo"<center><h3><font color='red'>Cart is Empty</font></h3></center>";
echo "
<a href='beers.php'><button style='border-radius:50px; float:left; background-color:black;' class='checkout'>Continue Shopping</button></a>


"
;
					}
					elseif(!empty($_SESSION["shopping_cart"]))
					{
					$total =0;
					echo "
					<div class='column-labels'>
    <label class='product-image'>Image</label>
    <label class='product-details'>Product</label>
    <label class='product-price'>Price</label>
  
<label class='product-quantity'>Quantity</label>
    
<label class='product-removal'>Remove</label>
    <label class='product-line-price'>Total</label>
  </div>
					
					";
						foreach($_SESSION["shopping_cart"] as $keys => $values)
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
					
					
				
					
					echo" <div class='product'>
    <div class='product-image'>
      <img width='100px' height='150px' src='BeerIMG/".$row['image']."'>
    </div>
    <div class='product-details'>
      <div class='product-title'>".strtoupper($row['name'])."</div>
      
      <div class='product-title'>".strtoupper($row['size'])."</div>
      
      
     
    </div>
    <div class='product-price'>".$row['price']."</div>
    <div>".$row['sum(price)']."</div>
    
    <div class='product-quantity'>
    ".$qtyyy." 
     
    </div>
    <div class='product-removal'>
    
     
      <a href='cart_list.php?action=delete&id=".$values['item_id']."'><span class='text-danger'>Remove</span></a>
      
   </div>
    
    <div class='product-line-price'>".$grand_total."</div>
  </div>
  
  
    ";
  	}
  }	
}	
?>
  		
  <?php
  $topp = 0.05;
  $shoppingfee = $total * $topp;
  $tax = 0.08875;
  $withTAX = $total * $tax;
  $grand_total = $total + $withTAX;
  echo"<div class='totals'>
    <div class='totals-item'>
      <label>Subtotal</label>
      <div class='totals-value' id='cart-subtotal'>".number_format($total, 2)."</div>
    </div> 
    
    <!--
    <div class='totals-item'>
      <label style='color:red; font-weight:normal;'>Discount (10%)</label>
      <span style='color:red;'><div class='totals-value' id='cart-shipping'>".number_format($shoppingfee,2)."</span></div></div>
      
    -->
     <div class='totals-item'>
      <label>Tax</label>
      <div class='totals-value' id='cart-tax'>".number_format($withTAX,2)."</div>
    </div>
    
    <div class='totals-item'>
      <label>Delivery Fee</label>
      <div class='totals-value' id='cart-tax'>0.00</div>
    </div>
    
    
    
    <div class='totals-item totals-item-total'>
      <label>Grand Total</label>
      <div class='totals-value' id='cart-total'>".number_format($grand_total,2)."</div>
    </div>
  </div>
  
<a href='beers.php'><button style= 'background-color:black;' class='checkout'>Continue Shopping</button></a><br>

<a href='address.php'><button style='background-color:black;' class='checkout'>Proceed to Checkout</button></a>
  ";
	
       }
       $_SESSION["totle"] = number_format($grand_total,2);
		$_SESSION["taxx"] = number_format($withTAX,2);
				$_SESSION["subtotaal"]	= $total;
			?>		
								