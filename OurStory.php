<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>
<style>
.bg {
background-size:1400px 800px;
  opacity: 0.9;
  filter: alpha(opacity=50);
}

.box1 {
  position: absolute;
  top: 55px;
  background-color: lightgrey;
  width: 1332px;
}

.b1 {
  position: absolute;
  bottom: 70px;
  right: 800px;
  width:400px;
}

.b2 {
  position: absolute;
  top: 530px;
  right: 800px;
  width:400px;
}

.b3 {
  position: absolute;
  top: 150px;
  right: 250px;
  width:400px;
  
}
</style>

<body background="story.jpeg" class="bg">
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
  <a href="Gallery.php" class="bar-item button">Gallery</a>
</div>

<br><br>
<div class="box1">
  <center><h1 style="font-size:30px;"><b>~HEALTHY GRID'S STORY~</b><h1><center>
</div>

<div class="b3">
<img src="storyImg.jpg" height="650" width="600">
</div>
<div class="b1">
  <center><h1><b>Our Story</h1></center>
  <font size="4"> <p>Healthy Grid is a web application which will provide healthy food options to its customers. With the rise in lifestyle diseases, people are now keen to say goodbye to their fast food days and seek healthier options. Also due to their busy schedule, people are not left with the time or energy to cook healthy meals at home. It also becomes difficult for the majority of the students who stay in PGs, hostels, flats, where they don’t have a proper facility to cook due to which they adopt an unhealthy diet.</p></font></b>
</div>

<div class="b2">
  <center><h1><b>Since 2010</h1></center>
  <font size="4"> <p>Healthy Grid is a web application which will provide healthy food options to its customers. With the rise in lifestyle diseases, people are now keen to say goodbye to their fast food days and seek healthier options. Also due to their busy schedule.</p></font></b> <br><br>
</div>	
<?php include('Footer.php'); ?>
</body>
</html>