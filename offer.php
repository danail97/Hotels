<!DOCTYPE html>

<?php
  $url = "http://localhost:8000/hotels/api.php/listOffers/".$_GET['id'];
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  $offer = json_decode($output, true);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./css/offer.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<img src="<?php echo $offer["image_url"]?>">;
</div>
<div style="padding-bottom:15px">
    <h1><?php echo $offer["name"]?></h1>
 </div>
 <br>
<b>Описание на хотела:</b>
<p><?php echo $offer["description"]?></p>
 <table class="of_tab_max" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="text-align: center;"><strong><span style="color: #ff0000;">Вид настаняване</span><br></strong></td>
<td style="text-align: center;">
<p align="center"><span style="color: #008080;"><strong>Цена</strong></span></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><strong>Апартамент</strong></p>
</td>
<td style="text-align: center;">
<p align="center"><strong><?php echo $offer["apartment_price"]." лв" ?></strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p align="center"><strong>Двойна стая</strong></p>
</td>
<td style="text-align: center;">
<p align="center"><strong><?php echo $offer["room_price"]." лв" ?></strong></p>
</td>
</tr>
</tbody>
</table>

<form action='../offers.php' enctype='multipart/form-data' method='post' onsubmit="return myFunction()">
	<button>Резервирай</button>
</form>
</body>
<script>
function myFunction()
{
    var username = '<%= Session["username"] %>';
    if(username!=""){
		confirm("Потвърждение");
    } else {
        alert("You are not logged in");
    }
}
</script>
</html>