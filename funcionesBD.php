<?php

function conecta(){
$servername = "localhost";
$username = "id17465659_root";
$password = ">ZK>L/I@!&?6YbrP";
$dbname = "id17465659_proyecto";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Connection failed " .mysqli_connect_error());
	return false;
} else{
	return $conn;
}

}
 ?>