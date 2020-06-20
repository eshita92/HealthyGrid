<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">
</head>
<style>
.bg {
  opacity: 0.9;
}

.box1 {
  position: absolute;
  top: 50px;
  background-color: lightgrey;
  width: 1350px;
}

.b1 {
  position: absolute;
  top: 200px;
  right: 450px;
  width:400px;
  height:350px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 25px;
}

input {
  width: 100%;
  font-size:20;
}

table,td,tr {
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

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 80%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<body background="reservation.jpg" class="bg">
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
  <center><h1 style="font-size:30px;"><b>~RESERVATIONS~</b><h1><center>
</div>
<div class="b1">
  <center><h1><b>~Book a Table~ </h1>
  <form>
    <table>
      <font size="20">
      <tr>
	    <td>Date:</td>
		<td><input type="date" name="date" placeholder="Date"><td>
	  </tr>
	  <tr>
	    <td>Time:</td>
		<td><input type="time" name="time" placeholder="Time"></td>
	  </tr>	
	  <tr>
        <td>Party Size:</td>
		<td><select style= "width:100%; height:35px;">
		<b>	<option value=1>1 person</option>
		<option value=2>2 people</option>
		<option value=3>3 people</option>
		<option value=4>4 people</option>
		<option value=5>5 people</option>
		<option value=6>6 people</option>
		<option value=7>7 people</option>
		<option value=8>8 people</option>
		<option value=9>9 people</option>
		<option value=10>10 people</option></b>
	    </select></td>
	  </tr></font>
    </table>
     <b> <input type="button" id="myBtn"value="BOOK" style= "width:65%; height:35px;"></b>
	  </form></center>
 </div>
 


	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   <center> <h2> <b>SELECT YOUR TABLE<b> </h2>
   <img src="floorplan.png" id="img01" width="650" height="460"><br>
	<input type="button" value="CONFIRM" name="confirm" style="width:30%; height:30px;" onclick="closeDialog()">
	</center>
  </div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

function closeDialog() { 
  modal.style.display = "none";
}
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php include('Footer.php'); ?>
</body>
</html>