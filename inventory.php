<!DOCTYPE html>
<html>
<head>
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
	include ("inventory_search.php");
	?>
<table>
  <tr>
    <th>Beer ID</th>
    <th>Image</th>
    <th>Name</th>
    <th>Size</th>
    <th>Price</th>
    <th>Group</th>
    <th>Status</th>
    <th>Availability</th>
    <th>Update</th>
  </tr>

  
  <?php
  require("mysql_connect.php");
  
  
  
  
  $sqli_inven = "select * from All_Beer";
  $resqult_inve = mysqli_query($connect, $sqli_inven);
  if(mysqli_num_rows($resqult_inve) > 0)
  {
  
  
  while($row = mysqli_fetch_assoc($resqult_inve))
  {
  $berr_id = $row['id'];
   $berr_img = $row['image'];
   $berr_name = $row['name'];
   $berr_size = $row['size'];
   $berr_price = $row['price'];
   $berr_group = $row['be_group_beer'];
   $item_Status = $row['product_status'];
   
   echo "<tr>
   <form action='inventory.php' method='POST'>
     <input type='hidden' value='".$berr_id."' name='bee_id'>
     <td>".$berr_id."</td>
     <td><img width='50px' height='80px' src='BeerIMG/".$berr_img."'/></td>
    <td>".$berr_name."</td>
    <td><input type='text' value='".$berr_size."' name='bee_size'></td>
    <td><input type='number' step='any' value='".$berr_price."' name='bee_pric'></td>
    <td><input type='text' value='".$berr_group."' name='bee_grou'></td>
    <td>".$item_Status."</td>
    <td><select name='status_item'>
  <option value='".$item_Status."'>-</option>
  <option value='Show'>Show</option>
  <option value='Hide'>Hide</option>
</select></td>
    <td><input type='submit' value='Update'></td>
    </form>
  </tr>
  ";
   
   
  }
  }
 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  require("mysql_connect.php");
  $idd = $_POST['bee_id'];
  $sizeer = $_POST['bee_size'];
	$pric = $_POST['bee_pric'];
	$group = $_POST['bee_grou'];
	$avalibelee = $_POST['status_item'];
  
  $sql_update = "UPDATE All_Beer SET size='$sizeer' , price='$pric', be_group_beer='$group', product_status='$avalibelee'  WHERE id = '$idd' ";
  $run_update = mysqli_query($connect, $sql_update);
  if($run_update){
    echo '<script>window.location="inventory.php"</script>';
 
  }
  
  }


  mysqli_close($connect);
  ?>
  
  

  </table>

</body>
</html>



































