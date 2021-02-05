<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="css/bootstrap.css">

<title>Home</title></head>

<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="header">
  <div class="head1">LECTURE NOTES SYSTEM</div>
  <div class="head2">A great place to learn</div>
</div>
	

<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="course.php">Course</a>
  <a href="about.php">About us</a>
  <a href="login.php">Login</a>
</div>
<div class="content">
</div>

<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We make study effective and accessible.</h2>
      <a href="course.php" class="btn-get-started">Get Started</a>
    </div>
  </section>



	
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= scrollTo() {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br>
<footer>
  <div class="footer">
    <marquee behavior="scroll" direction="left" text-color="white"><b>For Contact:- 9860421382,9861371889,9865497245-----E-mail id: lecturenotes@gmail.com</b></marquee>
</div></footer>
    
</html>


<?php
require_once('config.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"lecturev1");

session_start();	

?>