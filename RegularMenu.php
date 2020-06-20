<html>
<title>Menu(Regular Menu)</title>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: white;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: lightgrey;
  }
  
.box1 {
  position: absolute;
  top: 50px;
  background-color: lightgrey;
  width: 1350px;
}

.box2 {
  position: absolute;
  top: 144px;
  right: 100px;
  width:400px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
  border-radius:10px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 144px;
  width: 48%;
  font-size: 18px;
  position: absolute;
  left: 140px;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;      /* gray color */
}

.active {
  background-color: #4CAF50;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 50%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  background-color:white;
  width: 46.5%;
  align: center;
  position: absolute;
  top: 200px;
  left: 140px;
}

.myFontSize {
  font-size: 18px;
}

div.b {
  text-align: left;
}

.popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

.popup-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  font-size:20px;
  font-weight:bold;
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 40px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

table {
 
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 8px;
}

tr {
border-bottom: 1pt solid #F0F0F0;
}
</style>

<body style="background-color:grey">
  <div class="bar xlarge black opacity hover-opacity-off">
    <a href="Home.php" class="bar-item button">HOME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
    <a href="OurStory.php" class="bar-item button">OUR STORY &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
    <div class="dropdown">
      <a class="dropbtn  button">MENU &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <i class="bar-item"></i> </a>
      <div class="dropdown-content">
        <a href="RegularMenu.php" onclick="openMenu(event, 'Starters')">Regular Menu</a>
        <a href="DietMenu.html">Diet Menu</a>
        <a href="MedicalMenu.html">Menu according health disease</a>
      </div>
    </div> 
	<a href="Reservations.php" class="bar-item button">RESERVATIONS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
    <a href="Contacts.php" class="bar-item button">CONTACT US &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
    <a href="Gallery.php" class="bar-item button">GALLERY</a>
  </div> 	

<div class="box1">
  <center><h1 style="font-size:30px;"><b>~REGULAR MENU~</b><h1></center>
</div>

<div class="box2">
 <h1 style="font-size:24px;"><b>Your Order</b><h1>
</div>

<br><br><br><br>

<ul>
  <li><a class="active" href="#starters" onclick="openMenu(event, 'Starters')"><b>STARTERS</b></a></li>
  <li><a href="#maincourse" onclick="openMenu(event, 'Maincourse')"><b>MAIN COURSE<b></font></a></li>
  <li><a href="#" onclick="openMenu(event, 'Dessert')"><b>DESSERT<b></font></a></li>
</ul>

<div id="Starters" class="tabcontent">
  <h3><span id="starters">STARTERS</span></h3>
  <font color="green"><h4>Vegetarian</h4></font>
  <table>
  <tr>
	<td><span class="myFontSize">Today's Soup <span class="tag red round"> &nbsp Seasonal &nbsp </span></td>
	<td><span class="tag gray round"> &nbsp Rs 225 &nbsp </span></td>
	<td><a href="#" id="add" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  
  </tr>
  
  <div id="myPopup" class="popup">
	<div class="popup-content">
	<span class="close">&times;</span>
    <h4 style="color:orange">Ingredients</h4>
	<h5 style="color:green">Vegetables</h5>
	
    <input type="checkbox" name="tomatoes" value="tomatoes">Tomatoes<br>
	<input type="checkbox" name="potato" value="potato">Carrot<br>
    <input type="checkbox" name="beans" value="beans">Green Beans<br>
    <input type="checkbox" name="corn" value="corn">Corn<br>
	<input type="checkbox" name="peas" value="peas">Peas<br>
    <input type="checkbox" name="garlic" value="garlic">Garlic<br>
	<h4 style="color:red" >Quantity &nbsp &nbsp &nbsp &nbsp &nbsp <input type="number" name="quantity" value="1" min="1" max="5""></p>
	<br>
	<center><a href="#" class="button tag green round"> &nbsp ADD TO CART &nbsp </a></center>
	</div>
  </div>
  <tr>
	<td style="width:60%">French Fries</td>
	<td><span class="tag gray round"> &nbsp Rs 150 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Gobi Sholay Kabab</td>
	<td><span class="tag gray round"> &nbsp Rs 199 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Babycorn Crispy Fried</td>
	<td><span class="tag gray round"> &nbsp Rs 205 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr><tr>
	<td>Carrot Pepper Dry 65</td>
	<td><span class="tag gray round"> &nbsp Rs 195 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr><tr>
	<td>Bhendi French Fry</td>
	<td><span class="tag gray round"> &nbsp Rs 199 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr><tr>
	<td>Mushroom Curry Leaf Dry</td>
	<td><span class="tag gray round"> &nbsp Rs 220 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Paneer sholay Kabab</td>
	<td><span class="tag gray round"> &nbsp Rs 230 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  </table>
  <font color="green"><h4>Non-Vegetarian</h4></font>
  <table>
  <tr>
	<td style="width:60%">Chicken Fry</td>
	<td><span class="tag gray round"> &nbsp Rs 290 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Bamboo Chicken</td>
	<td><span class="tag gray round"> &nbsp Rs 310 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Chicken Roast</td>
	<td><span class="tag gray round"> &nbsp Rs 255 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Chilly Chicken</td>
	<td><span class="tag gray round"> &nbsp Rs 255 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Chicken Kabab</td>
	<td><span class="tag gray round"> &nbsp Rs 250 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Fish Fry</td>
	<td><span class="tag gray round"> &nbsp Rs 399 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Mutton Keema Balls</td>
	<td><span class="tag gray round"> &nbsp Rs 285 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Egg Roast</td>
	<td><span class="tag gray round"> &nbsp Rs 145 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  <tr>
	<td>Prawns 64</td>
	<td><span class="tag gray round"> &nbsp Rs 330 &nbsp </span></td>
	<td><a href="#" class="button tag green round"> &nbsp ADD &nbsp </a></td>
  </tr>
  </span>
</table>
</div>

<div id="Maincourse" class="tabcontent">
  <h3>Maincourse &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </h3>
  <font color="green"><h4>Vegetarian &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </h4></font>
  <span class="myFontSize"><span id="maincourse">Today's Soup </span><span class="tag red round">Seasonal</span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="tag gray round"> &nbsp Rs 225 &nbsp </span> &nbsp &nbsp &nbsp <a href="#" id="add" class="button tag green round"> &nbsp ADD &nbsp </a>
  
  <div id="myPopup" class="popup">
	<div class="popup-content">
	<span class="close">&times;</span>
    <h4 style="color:orange">Ingredients</h4>
	<h5 style="color:green">Vegetables</h5>
	
    <input type="checkbox" name="tomatoes" value="tomatoes">Tomatoes<br>
    <input type="checkbox" name="beans" value="beans">Green Beans<br>
    <input type="checkbox" name="corn" value="corn">Corn<br>
	<input type="checkbox" name="peas" value="peas">Peas<br>
    <input type="checkbox" name="onion" value="onion">Yellow onion<br>
    <input type="checkbox" name="garlic" value="garlic">Garlic<br><br>
	<br>
	</div>
  </div>
  <hr>
  </span>
</div>

<div id="Dessert" class="tabcontent">
  <center><h2>DESSERT</h2></center>
  <h3><b>Belgium Chocolate Waffle</b> <span class="tag red round">Coffee</span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="tag gray round">&nbspRs 325&nbsp</span> <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#" class="button tag green round">&nbspADD&nbsp</a>
  <hr>
</div>
</span>

<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="arrow.png" style="height: 30px;"></button>

<script>
function openMenu(evt, itemName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(itemName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the popup
var pop = document.getElementById("myPopup");

// Get the button that opens the popup
var btn = document.getElementById("add");

// Get the <span> element that closes the popup
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the popup 
btn.onclick = function() {
  pop.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span.onclick = function() {
  pop.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == pop) {
    pop.style.display = "none";
  }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
<?php include('Footer.php'); ?>
</body>
</html>