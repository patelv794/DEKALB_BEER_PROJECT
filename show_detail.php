<?php 
session_start();

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_id1'			=>	$_POST["hidden_id"],
				'item_quantity'		=>	$_POST["quantity"],
				'item_img'			=>	$_POST["hidden_img"],
				'item_name'		=>	$_POST["hidden_name"],
				'item_size'			=>	$_POST["hidden_siz"],
				'item_price'		=>	$_POST["hidden_pricce"]
			);
			 $_SESSION["shopping_cart"][$count] = $item_array;
		}
		 else
 		{
 		    $iffhbdjebre = $_GET['idd_for_the_detail'];
	$namejsdj = $_GET['iname_for_the_detail'];
		echo '<script>
		alert("Item Already Added");
		window.history.back();
		</script>';
		
		}
	
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_id1'			=>	$_POST["hidden_id"],
			'item_quantity'		=>	$_POST["quantity"],
			'item_img'			=>	$_POST["hidden_img"],
				'item_name'		=>	$_POST["hidden_name"],
				'item_size'			=>	$_POST["hidden_siz"],
				'item_price'		=>	$_POST["hidden_pricce"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
		
	}
		echo "<script>
	
	window.history.back();
</script>";


}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
 include ("BoosetCode.php");
  
 
 ?> 
 <title>Beers</title>
<link rel="icon" href="img/beer16.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin: 0;
    
}
 

.top ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    top: 0;
   
}

.top li {
    float: left;
}

.top li a {
    display: block;
    color: white;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;
    font-size: 18px;
}

.top li a:hover {
    background-color: #111;
}

.top li img{
width: 50px;
height: 50px;
padding-top: 20px;
padding-bottom: 0px;
background-color: white;
border-radius: 10px;
margin-right: 10px;
margin-bottom: -20px;
margin-top: -34px;
}
.container {
margin-top: 15px;
margin-left: 15px;
    width:130px;
    float:left;   
    font-size: 17px;
    border-bottom:1px solid black;
}
.image {
  
  height: auto;
  
}
span.price {
 color: black;
 font-size: 16px;
}
p {
font-family: Copperplate, "Copperplate Gothic Light", fantasy;
}


#myUL {
  list-style-type: none;
  }
  #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

td
{
    padding:10px 15px 10px 5px;
}	


div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
  margin-left:20px
  
}

div.scrollmenu a {

  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: ;
}

#button_submi{
font-family: Copperplate, "Copperplate Gothic Light", fantasy;
background-color:white;
  text-decoration: none;
  border: none;
    border-bottom:1px solid black;
  
}

div.detail_name_price{
    padding:5px;
    margin-top:10px;
    
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
<p style=" float:right; padding-top:10px;"><a href="cart_list.php"><img width="50px" height="50px" src="BeerIMG/shopping_cart.jpg"></a></p>
</ul>
</div>
<!-- 
 <?php
 include ("search_Beer.php");
 ?>
 
 -->

	 
		<?php
		require ('mysql_connect.php');
		$datiless = $_GET['idd_for_the_detail'];
				$query = "SELECT * FROM All_Beer WHERE id = $datiless;";
				$result = mysqli_query($connect, $query);
				
				if(mysqli_num_rows($result) > 0)
				{echo "<table style='width:50%'>
				<ul id='myUL'>
				";

					while($row = mysqli_fetch_array($result))
					{
					$name_for_name = $row['name'];
					$discount_price = $row["price"];
					$deal_price = $discount_price + 1;
				?>
			
	<form method="post" action="show_detail.php?action=add&id=<?php echo $row["id"]; ?>">
					  <li>
	 				  


<tr><td><div class="container">

<img src="BeerIMG/<?php echo $row["image"]; ?>" class="image" style="width:100%"/><br /></td>
<div class="detail_name_price">
<h3><p><?php echo $name_for_name; ?><h4><?php echo $row["size"]; ?></h4></h3><br>

    <td><h4><spam style="text-decoration-line: line-through; "><p>$<?php echo $deal_price; ?></spam></h4>
<span style=""><h4>$<?php echo $row["price"]; ?></h4></span></b><br>
<input style="width:100px; text-align:center;" type="number" name="quantity" value="1" min="1" max="99" /><br><br>
 <input type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart" />
</td></tr></div>

<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_siz" value="<?php echo $row["size"]; ?>" />
<input type="hidden" name="hidden_pricce" value="<?php echo $row["price"]; ?>" />


					
	</form>
	</table></div>
		
		
<hr>
<?php
		require ('mysql_connect.php');
		$datiless = $_GET['idd_for_the_detail'];
		$namsfdsf = $_GET['iname_for_the_detail'];
		$namsfff = addslashes($namsfdsf);
				$query = "SELECT * FROM All_Beer WHERE name LIKE '%$namsfff%' ORDER BY `All_Beer`.`price` DESC ";
				$result = mysqli_query($connect, $query);
				
				if(mysqli_num_rows($result) > 0)
				{
				echo "<h3 style='margin-left:20px'>Different Sizes & Beers...</h3><div class='scrollmenu'>
				
				";
					while($row = mysqli_fetch_array($result))
					{
				
					$name_for_img = $row['image'];
					$name_for_name = $row['name'];
					$name_for_size = $row['size'];
					$name_for_price = $row['price'];
				
				echo "
				
    <a href='#home'>
    
    



<form action='show_detail.php' method='GET'>
<input type='hidden' name='idd_for_the_detail' value=".$row['id']." /><br />
<input type='hidden' name='iname_for_the_detail' value=".$row['name']." /><br />

<button id='button_submi' type='submit'><img width='100px' height='180px' src='BeerIMG/".$name_for_img."'/><br>".$name_for_name."<br>".$name_for_size."<br>$".$name_for_price."</button>
</form>



</a>
  

  ";

				}echo "</div><br>";
				
				}

				
					}echo "</ul>";
					mysqli_close($connect);
				}
				
			?>
			
						
		


	</body>
	
	
</html>

