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
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
