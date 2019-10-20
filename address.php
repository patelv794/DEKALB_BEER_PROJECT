<?php
session_start();
if (!isset($_SESSION["shopping_cart"])){
 header("location:beers.php");
}
?>
<?php

if (isset($_POST['SubmitAllTheDetails']))
{
$_SESSION["idderand"] = rand(2345,34313);
$_SESSION["fname"] = $_POST['F_name'];
$_SESSION["lname"] = $_POST['L_name'];
$_SESSION["address"] = $_POST['Addre'];
$_SESSION["address1"] = $_POST['Addre1'];
$_SESSION["zip"] = $_POST['Zipp'];
$_SESSION["city"] = $_POST['cityy'];
$_SESSION["statt"] = $_POST['statt'];
$_SESSION["phone"] = $_POST['phoneee'];
$_SESSION["messages"] = $_POST['messs'];

echo '<script type="text/javascript">
    
    window.location.href = "order_review.php";

    
    </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
 include ("BoosetCode.php");
 ?>
 <title>Delivery Address</title>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/beer16.jpg">
<link rel="stylesheet" href="navigation.css" type="text/css">
<style>

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


div.addressform1 {
  padding: 20px;
}
 
</style>

<script>
            function loadXMLDoc() {
                var xhttp = new XMLHttpRequest();
                var zipcode = document.getElementById("zip5").value;
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        myFunction(this);
                    }
                };
                xhttp.open("GET", "http://production.shippingapis.com/ShippingAPITest.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID='023STUDE0706'><ZipCode ID='0'><Zip5>" + zipcode + "</Zip5></ZipCode></CityStateLookupRequest>", true);
                xhttp.send();
            }
            function myFunction(xml) {
                var x, i, xmlDoc, txt;
                xmlDoc = xml.responseXML;
                txt = "";
                x = xmlDoc.getElementsByTagName("CityStateLookupResponse");
                for (i = 0; i < x.length; i++) {
                    document.getElementById("citytxt").value = x[i].getElementsByTagName("City")[0].childNodes[0].nodeValue;
                    document.getElementById("statetxt").value = x[i].getElementsByTagName("State")[0].childNodes[0].nodeValue;
                    document.getElementById("respose").innerHTML = "City: " + x[i].getElementsByTagName("City")[0].childNodes[0].nodeValue + "\nState: " + x[i].getElementsByTagName("State")[0].childNodes[0].nodeValue;;
                }
                
            }
        </script>
		</head>
	<body><div class="store">
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
<br><br><BR><br>
<div class="shopping-cart">


<center><h4 style="color: red;">* Please Note That We Only Do Delivery in Zip Code Area: <b style="color: green;">11201, 11206, 11238, 11217, 11205, 11216, 11215, 11249, 11231, 11243, 11211, 11241</b></h4></center>

	<div class="addressform1">
  <form action="address.php" method="post">
    <label>First Name</label>
     
    <input type="text" name="F_name" placeholder="Enter Your First name.." required>

    <label>Last Name</label>
    <input type="text"  name="L_name" placeholder="Enter Your Last name.."required>

    <label>Address</label>
    <input type="text"  name="Addre" placeholder="Address ex:123 3rd ave" required>

    <label>Address (optional)</label>
    <input type="text"  name="Addre1" placeholder="#APT-Suit-Floor">

    <label>Zip Code</label>
    <input type="number" id="zip5" name="Zipp" placeholder="12345" required>

    <label>City</label>
    <input type="text" onClick="loadXMLDoc();" id="citytxt" name="cityy" readonly>

<label>State</label>
    <input type="text" id="statetxt" name="statt" readonly>

    <label>Phone Number</label>
    <input type="number" name="phoneee" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required>

    <label>Message (Optional)</label>
     <textarea name="messs" placeholder="Any Special Instruction..."></textarea>
    
    <input type="Submit" value="Continue" name="SubmitAllTheDetails">
  </form>
</div>
	
	
	
		
</body>
</html>

