<?php 
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

  include_once 'functions/reg.php';
  include_once 'functions/hotel.php';

  $request_method=$_SERVER["REQUEST_METHOD"];
  $request_uri = $_SERVER["REQUEST_URI"];

  switch($request_method) {
    case 'GET': 
        if ($request_uri === '/api.php/listOffers') {
          $offers = listOffers();
          echo $offers;
        } else if(strpos($request_uri, "/api.php/listOffers") === 0) {
          $id = str_replace("/api.php/listOffers/","",$request_uri);
          $offer = getOffer($id);
          echo $offer;
        } else {
          echo json_encode(array('error' => 'Unrecognized path'));
        }
        break;

    case 'POST': 
      if ($request_uri === '/api.php/registerUser') {
        registerUser();
      } else if($request_uri === '/api.php/addOffer') {
        addHotel();
      } else {
        echo json_encode(array('error' => 'Unrecognized path'));
      }
      break;

    default: header("HTTP/1.0 405 Method Not Allowed"); break;
  }

?>