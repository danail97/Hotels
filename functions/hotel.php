<?php

require "config/Database.php";

function listOffers() {
    global $conn;

    $sql = "SELECT * from hotel";
    $query = $conn->query($sql) or die('Request unsuccessful');
    
    $rowCount = $query->rowCount();

    if($rowCount > 0) {
      $offersArr = array();

      while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $offerItem = array(
          'id' => $id,
          'name' => $name,
          'description' => $description,
          'image_url' => $image_url,
          'apartment_price' => $apartment_price,
          'room_price' => $room_price,
          'type' => $type
        );

        array_push($offersArr, $offerItem);
      }

      return json_encode($offersArr);
    } else {
      return json_encode(array('message' => 'No Hotels Found'));
    }
}

function getOffer($id) {
    global $conn;

    $sql = "SELECT * from hotel WHERE `id` = '$id'";
    $query = $conn->query($sql) or die('Request unsuccessful');
    
    $rowCount = $query->rowCount();
    if($rowCount > 0) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        extract($row);

        $offerItem = array(
          'id' => $id,
          'name' => $name,
          'description' => $description,
          'image_url' => $image_url,
          'apartment_price' => $apartment_price,
          'room_price' => $room_price,
          'type' => $type
        );
        return json_encode($offerItem);
    } else {
      return json_encode(array('message' => 'No Hotels Found'));
    } 
}

function addHotel(){
    global $conn;
	echo "suuu";
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imageURL = $_POST['image_url'];
    $apartmentPrice = $_POST['apartment_price'];
    $roomPrice = $_POST['room_price'];
    $type = $_POST['type'];

	$sql = "INSERT INTO hotel VALUES (null,'$name','$description','$imageURL','$apartmentPrice','$roomPrice','$type')";
	$query = $conn->query($sql) or die('Request unsuccessful');
	
	header("Location: ./index.php");
	die();
}
?>