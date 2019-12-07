<?php

require "config/Database.php";
session_start();
if(isset($_SESSION['username'])){
	header("Location: index.html");
}

if($_POST){
addHotel();
}


function addHotel(){
    global $conn;
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imageURL = $_POST['iage_url'];
    $apartamentPrice = $_POST['apartament_price'];
    $roomPrice = $_POST['room_price'];
    $type = $_POST['type'];

	$sql = "INSERT INTO hotel VALUES (null,'$name','$description','$imageURL','$apartamentPrice','$roomPrice','$type')";
	$query = $conn->query($sql) or die('Request unsuccessful');
	
	header("Location: /index.php");
	die();
}
?>