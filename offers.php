<?php
  include_once 'functions/reg.php';
?>

<!DOCTYPE html>
<html>
<title>Оферти</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif, background-color}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body style="background-color: unset;">

<!-- Top menu -->
<div id="header" class="header">
    <div id="links">
      <a href="index.php">Начало</a>
      <a href="offers.php">Оферти</a>
      <a href="contacts.html">Контакти</a>
       <?php 
		  if(isset($_SESSION['username'])){?>
			<a href="lout.php">Изход</a>
		<?php }else{ ?>
			<a href="lin.php">Вход</a>
		<?php } ?>
  </div>
</div>


<?php 
  
  //REST CALLS

  $url = "http://localhost:8000/hotels/api.php/listOffers";
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  
  $offers = json_decode($output, true);
  $mountain = array();
  $sea = array();
  $culture = array();
  foreach ($offers as $key => $value){
	if($value["type"] === "mountain"){
		array_push($mountain, $value);
	} else if($value["type"] === "sea"){
		array_push($sea, $value);
	} else if($value["type"] === "culture"){
		array_push($culture, $value);
	}
  }   
?>

  
<!-- !PAGE CONTENT! -->

<form class="w3-center" action="./addOffer.php">
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<?php 
if(isAdmin()) { ?>
<form class="w3-center" action="/addOffer.php">
  <input class="w3-button w3-block w3-teal" type="submit" value="Добави хотел">
</form>
<?php } ?> 

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <h1 id="planinski" class="w3-center">Планински дестинации</h1>
  <?php
  foreach ($mountain as $key => $value) {
    echo '
    <div class="w3-third">
      <a href="./offer.php?id='.$value["id"].'"><img src="'.$value["image_url"].'" style="width:100%; height: 200px;"></a>
      <h3>'.$value["name"].'</h3>
    </div>';
  }
	?>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <h1 id="morski" class="w3-center">Морски дестинации</h1>
    <?php
  foreach ($sea as $key => $value) {
    echo '
    <div class="w3-third">
      <a href="./offer.php?id='.$value["id"].'"><img src="'.$value["image_url"].'" style="width:100%; height: 200px;"></a>
      <h3>'.$value["name"].'</h3>
    </div>';
  }
	?>
  </div>

  <!-- Third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
      <h1 id="kulturni" class="w3-center">Културни дестинации</h1>
    <?php
  foreach ($culture as $key => $value) {
    echo '
    <div class="w3-third">
      <a href="./offer.php?id='.$value["id"].'"><img src="'.$value["image_url"].'" style="width:100%; height: 200px;"></a>
      <h3>'.$value["name"].'</h3>
    </div>';
  }
	?>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>