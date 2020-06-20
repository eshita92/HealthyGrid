<html>
<title>Home(Healthy Grid)</title>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="myStyle1.css">
<style type = "text/css">

h1 {
            -moz-animation-duration: 3s;
            -webkit-animation-duration: 3s;
            -moz-animation-name: slidein;
            -webkit-animation-name: slidein;
         }
         @-moz-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         @-webkit-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
		 
.bg {
  background-size:1400px 800px;
  opacity: 0.9;
}

.box1 {
  background-color: white;
  width: 1330px;
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
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<!-- Navbar-->
<body background="home.jpg" class="bg" >
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
	  <div class="box">
	  <a class="bar-item button" href="#popup1">LOGIN</a>
      </div>
      <div id="popup1" class="overlay">
	    <div class="popup">
          <a class="close" href="#">&times;</a>
	      <div class="content">
	        <div class="padding-32">
              <form action="/action_page.php" target="">
                <center><h2><font color="red"><b>LOGIN</h2><b></font></center>
                <p><input class="input padding-16 border" type="text" placeholder="Enter your username" required name="username" id="username"></p>
                <p><input class="input padding-16 border" type="password" placeholder="Enter Password" required name="password" id="password"></p>
                <center><button class="button green block" type="submit">LOGIN</button><br>
	            <h4><font color="red"><b>Don't have an account?<b></font></h4>
	            <a href="#popup2"><font color="#158B86"><b>Sign up<b></font></a></center>
				<div id="popup2" class="overlay">
					<div class="popup">
					  <a class="close" href="#">&times;</a>
					  <div class="content">
						<div class="padding-32">
						  <form action="/action_page.php" target="">
							<center><h2><font color="red"><b>SIGN UP</h2><b></font></center>
							<p><input class="input padding-16 border" type="text" placeholder="Enter your Username" required name="uname" id="uname"></p>
							<p><input class="input padding-16 border" type="password" placeholder="Enter Password" required name="pwd" id="pwd"></p>
							<p><input class="input padding-16 border" type="password" placeholder="Confirm Password" required name="cpwd" id="cpwd"></p>
							<p><input class="input padding-16 border" type="email" placeholder="Enter your Email address" required name="email" id="email"></p>
							<p><input class="input padding-16 border" type="text" placeholder="Enter your Contact number" required name="phn" id="phn"></p>
							<br><center><button class="button green block" type="submit">SIGN UP</button><br>
			                <br>
						  </form>
						</div>
					  </div>
					</div>
				</div>
              </form>
            </div>
          </div>
	    </div>
      </div>
  </div>  	

<br><br><br><br><br>

<div class="box1">
  <center><h1 class="w3-tangerine" style= "font-size:95";>~Healthy Grid~</h1></center>
</div>

<br><br><br>

<p> <center> <a href="Contacts.php" class="button xlarge black">Contact Us</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="#" class="button xlarge black">Order Online</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="Gallery.php" class="button xlarge black">Gallery</a></p></center>
<br><br><br>
<script>
         function myFunction() {
            location.reload();
         }
</script>
<?php include('Footer.php'); ?>
</body>
</html>