<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
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

#myBtn:hover {
  background-color: #555;
}

input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
 
}

input[type=text]:focus {
  width: 100%;
}
</style>
</head>
<body>
	
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	
<form action="" method="post">	
  <input type="text" name="name_sear" placeholder="Search your beer brand..">
</form>

	
<?php


if($_SERVER['REQUEST_METHOD'] =='POST'){

require('mysql_connect.php');
$name_search = $_POST['name_sear'];
$sqllli = "

(SELECT * FROM All_Beer where name LIKE '%$name_search%')
;";
$resultrrw = mysqli_query($connect, $sqllli);
$r = mysqli_num_rows($resultrrw);
if($r>0){

while($row = mysqli_fetch_assoc($resultrrw)){
					echo "<form action='show_detail.php' method='GET'>
<input type='hidden' name='idd_for_the_detail' value=".$row['id']." />
<input type='hidden' name='iname_for_the_detail' value=".$row['name']." />
";
echo "
<td></td>
<div class='Beer_img_name_size'>
  <button id='button_submi' type='submit'>
  <img src='BeerIMG/".$row['image']."' style='width:100%; height:150px;'></button>
  
  </form>
  
  <div class='name_size_price'>
    <h4><b></b></h4> 
    <div class='extra_text_hidden'><p>".$row['name']."</p>
    <p style='margin-top:-10px;'>".$row['size']."</p></div>
  </div>
</div>";
}
}
}
?>
			
	
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>


 
 