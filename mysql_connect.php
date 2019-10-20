<?php
$SERVERNAME = "localhost";
$USERNAME = "id7959390_vee";
$PASSWORD = "207699364";
$DBNAME = "id7959390_vee";

$connect = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

if(!$connect){
	die ("Connection Failed" . mysqli_connect_error());
}


?>

