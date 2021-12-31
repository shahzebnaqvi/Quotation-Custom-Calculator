<?php

include_once('connection.php');

if (isset($_POST['submit'])){
	$sql = 'INSERT INTO `solar_details`(`id`, `create_time`, `solar_type`, `equipment`, `quality`, `kilowatt`, `price`) VALUES (NULL,CURRENT_TIMESTAMP, \''.$_REQUEST['solar_type'].'\', \''.$_REQUEST['equipment'].'\', \''.$_REQUEST['quality'].'\', \''.$_REQUEST['kilowatt'].'\', \''.$_REQUEST['price'].'\')';
// echo $sql;
	mysqli_query($sql);
}

if(isset($_REQUEST['update'])){
	$sql = "UPDATE `solar_details` SET `create_time`='".$_REQUEST['quality']."',`solar_type`='".$_REQUEST['solar_type']."',`equipment`='".$_REQUEST['equipment']."',`quality`='".$_REQUEST['quality']."',`kilowatt`='".$_REQUEST['kilowatt']."',`price`='".$_REQUEST['price']."' WHERE `id`='".$_REQUEST['id']."'";
	mysqli_query($sql);
}

if(isset($_REQUEST['editid'])){
	$sql= "SELECT `id`, `create_time`, `solar_type`, `equipment`, `quality`, `kilowatt`, `price` FROM `solar_details` WHERE id = ".$_REQUEST]['editid'];
	$row = mysqli_fetch_assoc(mysqli_query(connect_db(),$sql));
}


?>

