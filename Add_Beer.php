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
 font-size: 12px;
  width: 100%;
}

td, th {
  border: none;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

/* insert Form  */

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
  color:black;
}

.input_form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
</head>
<body>

<div class="store">
<a href="#"><h1>FORT GREENE FOOD MARKET</h1></a>
</div>
<div class="top">
<ul>
  <li><a href="orders.php">All Orders</a></li>
  <li><a href="inventory.php">Inventory</a></li>
  <li><a href="Add_Beer.php">Add Beer</a></li>
  
</ul>
</div>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  require("mysql_connect.php");
  //$idde = (rand(1067,1080));
  $img = $_POST['bee_img'];
  $name = $_POST['bee_name'];
	$sizee = $_POST['bee_sizee'];
	$Pricess = $_POST['bee_price'];
	$Groupp = $_POST['bee_grou'];
   $item_Status = $_POST['bee_status'];
	
  
  $sql_insert = "INSERT INTO `All_Beer`(`id`, `image`, `name`, `size`, `price`, `be_group_beer`, `product_status`) VALUES ('','$img','$name','$sizee','$Pricess','$Groupp','$item_Status')";
  $run_insert = mysqli_query($connect, $sql_insert);
  if($run_insert){
    
  }
  echo "<script>alert('New Beer Has Been Added...')</script>";
 
  }


  mysqli_close($connect);
  ?>
  
  
  
  
<div class='input_form'>
 <form action='Add_Beer.php' method='POST'>
    <label>Image URL</label>
    <input type="file" id="fname" name="bee_img" ">

    <label>Product Name</label>
    <input type="text" id="lname" name="bee_name" >

	 <label>Product Size</label>
    <input type="text" id="lname" name="bee_sizee" >

 <label>Product Price</label>
    <input type="text" id="lname" name="bee_price" >

 <label>Product Group</label>
    <input type="text" id="lname" name="bee_grou" >

    <label for="country">Product Status</label>
    <select id="country" name="bee_status">
      <option value="Show">Show</option>
      <option value="Hide">Hide</option>
      
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
  
  
  
  
  
  
  </body>
  </html>
  
  
  
  
  
  