
<?php 
session_start();
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



/*
extra_text_hiddenne
*/
div.extra_text_hidden {
  white-space: nowrap; 
  width: 150px; 
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: left;
  font-size:13px;
}

/*Scroll Up TOP*/

#button_to_up {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#button_to_up:hover {
  background-color: #555;
}

.Beer_img_name_size {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 165px;
  height: auto;
  float:left;
  margin-left:20px;
  margin-top:50px;
  
}
.Beer_img_name_size img {
	
width:100px; height:150px;
}

.Beer_img_name_size:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.name_size_price {
  padding: 2px 16px;
}
#button_submi{
border: none;
color: white;
  padding: 15px 32px;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  background-color: white;
  
}
  
</style>
		</head>
		
	<body>
	<button onclick="topFunction()" id="button_to_up" title="Go to top">Top</button>
	
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
<?php
	include ("search_Beer.php");
	?>

<?php
		require ('mysql_connect.php');
				$query = "SELECT * FROM All_Beer WHERE (be_group_beer = 'Beer') AND (All_Beer.product_status = 'Show')  ORDER BY RAND() AND `All_Beer`.`price`";
				$result = mysqli_query($connect, $query);
				
				if(mysqli_num_rows($result) > 0)
				{
				

					while($row = mysqli_fetch_array($result))
					{
					echo "<form action='show_detail.php' method='GET'>
<input type='hidden' name='idd_for_the_detail' value=".$row['id']." />
<input type='hidden' name='iname_for_the_detail' value=".$row['name']." />
";
echo "
<td></td>
<div class='Beer_img_name_size'>
  <button id='button_submi' type='submit'>
  <img src='BeerIMG/".$row['image']."'></button>
  
  </form>
  
  <div class='name_size_price'>
    <h4><b></b></h4> 
    <div class='extra_text_hidden'><p>".$row['name']."</p>
    <p style='margin-top:-10px;'>".$row['size']."</p></div>
  </div>
</div>


";

					}
				}
			?>
	
	
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("button_to_up").style.display = "block";
  } else {
    document.getElementById("button_to_up").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//hiden content show
function myFunction_show_hidden() {
  var x = document.getElementById("show12pk_bottle");
  if (window.getComputedStyle(x).visibility === "hidden") {
    x.style.visibility = "visible";
  }
}
</script>
	</body>
	
</html>

