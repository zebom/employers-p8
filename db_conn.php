<?php
$server_name = "localhost";
$username ="root";
$password = "";
$database_name ="employers";

$db = mysqli_connect($server_name,$username,$password,$database_name);

if(!$db){
	echo "connection failed";
	exit();
}
?>