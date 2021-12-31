<?php
function connect_db(){
$val = 0; 
if($val==0){
$servername = "localhost";
$username = "root";
$password = "";
 $dbname = "quotecalculator";}
 if($val==1){
 	$servername = "localhost";
	$username = "frdabjdp";
	$password = "asdcdsasa";
 	$dbname = "assadffaew";
 }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	// echo "hello";
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
return $conn;
}
?>