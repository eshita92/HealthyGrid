<html>
<head>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>
<style>

.bg {
  background-size:1400px 630px;
  opacity: 0.9;
}

.box1 {
  position: absolute;
  top: 54px;
  background-color:lightgrey;
  background-repeat: no-repeat;
  background-size:100% 100%;
  opacity:0.9;
  width: 98.9%;
  height:80px;

  
}

.b2 {
  position: absolute;
  top:200px;
  left: 200px;
  width:400px;
  height:350px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 15px;
}

.b3 {
  position: absolute;
  top: 200px;
  left: 700px;
  width:400px;
  height:350px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 15px;
}

input {
  width: 100%;
  font-size:20;
}

table,td,tr{
font-size:20;
font-weight:bold;
padding:7px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: lightgrey;
  border: none;
  color: black;
  cursor: pointer;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body background="contact.jpg" class="bg">
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
  <center><h1 style="font-size:30px;"><b>~Get In Touch~</b><h1><center>
</div>
 <center>
<div class="b2">
  <h2><b>~OUR LOCATION~</b></h2>
  <font size="3"> <p>500 Terry Francois Street,<br>
  San Francisco, CA 94158
  <br><br>
  Monday - Friday 12pm - 11pm
  <br>​​Saturday 11am - 12am
  <br>​Sunday 12pm - 12am</p></font></b> 
  <br><br><br><br>
</div></center>

<div class="b3">
	<center><h2><b>~CONTACT US~</b></h2>
    <font size="5"><br>
    <form>
      <input type="text" name="name" placeholder="Subject" style= "width:75%;"><br>
	  <textarea style= "width:75%;  height:105px;">Enter your msg</textarea><br><br>
    </font>
	<input type="button" value="SEND" style= "width:65%; height:35px; ">
	</form></center>
</div>
<?php include('Footer.php'); ?>
</body>
</html>