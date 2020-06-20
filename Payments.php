<html>
<meta charset="UTF-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="myStyle1.css">
<style>

.box1 {
  position: absolute;
  top: 55px;
  background-color: lightgrey;
  width: 1350px;
  opacity: 0.9;
}

.b1 {
  opacity: 1;
  position: absolute;
  top: 170px;
  left: 90px;
 width:600px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
   border-radius: 25px;
}

.b2 {
  position: absolute;
  top: 170px;
  right: 90px;
  width:440px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
   border-radius: 25px;
}

.b3 {
  position: absolute;
  top: 450px;
  right: 90px;
  width:440px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
   border-radius: 25px;
}
input[type=text],input[type=tel], select, textarea {
 width:50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: lightgrey;
  border: none;
  color: black;
  cursor: pointer;
  height:30px;
  width:100px;
}
.table,th,td{
     border-collapse: collapse;
     border-color: black;
     border: 1px solid black;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body style="background-color:grey">
<a href="#" id="xyLink" onfocus="toggleXY();" accesskey="z"></a>
<!-- Navbar (sit on top) -->
<div class="bar xlarge black opacity hover-opacity-off">
  <a href="Home.php" class="bar-item button">HOME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
  <a href="OurStory.php" class="bar-item button">OUR STORY &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
  <div class="dropdown">
    <a class="dropbtn  button">MENU &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <i class="bar-item"></i> </a>
    <div class="dropdown-content">
      <a href="RegularMenu.php">Regular Menu</a>
      <a href="DietMenu.html">Diet Menu</a>
      <a href="MedicalMenu.html">Menu according health disease</a>
    </div>
  </div> 
  <a href="Reservations.php" class="bar-item button">RESERVATIONS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
  <a href="Contacts.php" class="bar-item button">CONTACT US &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
  <a href="Gallery.php" class="bar-item button">GALLERY</a>
</div>

<br><br>

<div class="box1">
  <center><h1 style="font-size:30px;"><b>~PAYMENT~</b><h1></center>
</div>
<div class="b1">
  <center><h3><b>~Select a Payment Method~ </h3></center>
	<form>
		<input name="type" type="radio">Credit/Debit Cards<br><br>
		Name on the Card: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Supported Cards:<br>
		<input type="text"><br>
    Card Number:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
     <img src="visa.png"> <img src="mastercard.png" height="44px"><br>
    <input type="tel" maxlength="16"><br> 
    Expiry date: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="rupay.png" height="44px">  
     <img src="maestro.png" height="44px"><br>
    <input type="tel" maxlength="4"><br><br>
    CVV: <br>
    <input type="tel" maxlength="3"><br><br>
		<input name="type"type="radio">Cash on Delivery &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="button" name="submit" value="NEXT">

	</form>
 </div>
 <div class="b2">
 <p style="font-size:20px;"> <b>~Personal Details~ </b></p>
  Eshita Agarwal<br>
  8510803090  
  <h4><b>~Delivery Address~</b> </h4>
    Flat 706, Supertech Avant Garde, Mayur Vihar Phase-1, Delhi - 100091

 </div>
 <div class="b3">
  <center><h3><b>~Your Order~ </b></h3></center>
<table style="width:100%">
  <col width="130">
  <col width="80">
  <col width="80">
  <tr>
    <th> ITEM </th>
    <th> QUANTITY </th>
    <th>PRICE</th>
  </tr>
</table><br>
<table style="width:100%">
  <col width="130">
  <col width="50">
<tr>
<td>Subtotal:</td>
<td></td>
</tr>
<tr>
<td>Delivery Charge:</td>
</tr>
<tr>
<td>Taxes:</td>
</tr>
<tr>
<td>Total:</td>
</tr>
</table><br>
<center><input type="button" name="submit" value="PAY"></center><br>

 </div>
 
<?php include('Footer.php'); ?>
</body>
</html>