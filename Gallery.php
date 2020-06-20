<!DOCTYPE html>
<html>
<title>Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">

<style>

.bg {
  background-size:1400px 800px;
  opacity: 0.9;
}

.box1 {
  position: absolute;
  top: 54px;
  background-color: lightgrey;
  width: 1350px;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  visibility: hidden;
}

.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 50%;
  position: relative;
}

.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 25px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}

.popup .close:hover {
  color: red;
}

.popup{
    width: 20%;
}

.w3-tangerine {
  font-family: 'Tangerine', serif;
}



* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 90%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -200px;
}


.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<body background="gallery.jpg" class="bg">
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
  <center><h1 style="font-size:30px;"><b>~HEALTHY GRID'S GALLERY~</b><h1><center>
</div>
<br><br>
<div class="row">
  <div class="column">
    <img src="i1.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i2.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>

<br><br><br><br><br><br><br><br><br><br>

  <div class="column">
    <img src="i5.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i6.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i7.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="i8.jpg" style="width:330px;height:210px;" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  </div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="i1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="i2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="i3.jpg" style="width:100%;  height:472px;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="i4.jpg" style="width:100%; height:472px;">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="i5.jpg" style="width:100%; height:472px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="i6.jpg" style="width:100%; height:472px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="i7.jpg" style="width:100%; height:472px;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="i8.jpg" style="width:100%; height:472px;">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <?php include('Footer.php'); ?>
</body>
</html>