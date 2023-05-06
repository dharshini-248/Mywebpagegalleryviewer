<?php
session_start();

include("connection.php");
include("function.php");


$user_data=check_login($con);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Responsive Footer Section | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    	body {
  background-image: url('nin2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box;}


.header {
  overflow: hidden;
  background-color: #1DEA84;
  padding: 20px 10px;
}
#h1 {
	color:black;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 28px; 
  line-height: 25px;
  border-radius: 4px;
  margin-top: 0px;
  margin-right: 40px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  text-align: center;

}

.header a:hover {
  background-color: #BBC5B0;
  color: black;
}

.header a.active {
  background-color: #6D1AFE;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.heading{
	color:blue;
	font-size: 30px;
	font-family: Arial, Helvetica, sans-serif;
	background-color: black;

	text-align: center;
	margin-left: auto;
	padding: auto;
	margin-top: 10px;
	height: 100px;
}
.main {
	height:1000px;
}
.footer {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  height: 400px;
  text-align: center;
}

 .social{
 	padding: 20px 20px 30px;
 	font-size: 58px;
 	color: white;
 }

 img {
  vertical-align: middle;
  height: 200px;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
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

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.image {
	height: 50px;
}
.index{
  height: 120px;
  background-color: #DE3163;
margin-top: 0%;
font-size: 40px;
color: white;
text-align: center;
}
  </style>
  </head>
  <body>
  	<section id="section1">
  	<div class="heading"><h1>My Webpage</h1></div>
  	<div class="header"><a href="#default" class="logo" >
  	<img src="mylogo.png" class="image">&nbsp</a>	

  <div class="header-right">
    <a  href="#section1">Home</a>
    <a href="#section3">About</a>
    <a href="#section2">Gallery</a>
    <a href="login.php">Login</a>
     <a href="logout.php">Logout</a>
  </div>
</div><div><br></div>
</section>
<div class="index"> Hello,<?php echo $user_data['user_name']; ?>&nbsp<br>
  You are Logged in!
  </div>

<section id="section2">
<div class="main">
  <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="back.jpg" style="width:100%; height: 500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="hd1.jpg" style="width:100%;height: 500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="hd3.jpg" style="width:100%;height: 500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="hd4.jpg" style="width:100%;height: 500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="hdn3.jpg" style="width:100%;height: 500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="nin1.jpg" style="width:100%;height: 500px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="back.jpg" style="width:100%;height: 150px;" onclick="currentSlide(1)" alt="DON'T GIVE UP GREAT THINGS TAKE TIME.">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd1.jpg" style="width:100%;height: 150px;" onclick="currentSlide(2)" alt="CONSTANTLY THINK ABOUT HOW YOU COULD BE DOING THINGS BETTER. KEEP QUESTIONING YOURSELF.">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd3.jpg" style="width:100%;height: 150px;" onclick="currentSlide(3)" alt="TAKE RISKS NOW AND DO SOMETHING BOLD. YOU WON'T REGRET IT.">
    </div>
    <div class="column">
      <img class="demo cursor" src="hd4.jpg" style="width:100%;height: 150px;" onclick="currentSlide(4)" alt="FAILURE IS AN OPTION HERE. IF THINGS ARE NOT FAILING,YOU ARE NOT INNOVATION ENOUGH.">
    </div>
    <div class="column">
      <img class="demo cursor" src="hdn3.jpg" style="width:100%;height: 150px;" onclick="currentSlide(5)" alt="IF YOU ARE TIRED OF STARTING OVER STOP GIVING UP.">
    </div>    
    <div class="column">
      <img class="demo cursor" src="nin1.jpg" style="width:100%;height: 150px;" onclick="currentSlide(6)" alt="DON'T TELL PEOPLE YOUR PLANS. SHOW THEM YOUR RESULTS.">
    </div>
  </div>
</div>

<script>
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
</div>
</section><section id="section3">
<div class="footer">
 <div class="social">
              <a href="#"><span class="fab fa-facebook-f" ></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
            <h2 align="center">ABOUT:</h2>
           <h3 align="center" style="width: 100%;padding: 10px;">This is my sample webpage create for user login and sign up process. This page was created using bootstrap,css,html. This webpage displays few images like gallery and shows few motivational quotes. I hope you enjoyed using this webspage.</h3>

            <h2 align="center">Email:</h2><h3><a href="#">dharshinim.ug20.cs@francisxavier.ac.in</a></h3>

            <h3 align="center" style="width: 100%;padding: 10px;">For any query you may contact us.</h3>
</div>
</section>
  </body>
</html>
