<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/contacts.css">
    <script type="text/javascript" src="javascript/validation.js"></script>
</head>
<body>

<h2>Add offer</h2>

<form name="add-offer" method="post" action="api.php/addOffer" onsubmit="return validateOffer()">
<ul id="errors"></ul>
  Name:<br>
  <input type="text" name="name">
  <br>
  Type:<br>
  <input type="text" name="type">
  <br>
  Description:<br>
  <input type="text" name="description">
  <br>
  Image URL:<br>
  <input type="text" name="image_url">
  <br>
  Apartment price:<br>
  <input type="text" name="apartment_price">
  <br>
  Room price:<br>
  <input type="text" name="room_price">
  <br><br>
  <input type="submit" value="Add offer">
</form> 

</body>
</html>