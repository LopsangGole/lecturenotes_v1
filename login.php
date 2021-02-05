<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<title></title>
</head>
<body>
<div id="navbar">
  <a href="index.php" class="btn-nav">Home</a>
  <a href="course.php" class="btn-nav">Course</a>
  <a href="about.php" class="btn-nav">About us</a>
  <a href="login.php" class="btn-nav">Login</a>
</div><br><br><br>
<center>
<div class="card bg-secondary mb-3" style="max-width: 20rem;">
 <div class="card-body">
 <form method="post" action="">
<input class="box" type="text" name="username" placeholder="Username" required><br><br>
<input class="box"  type="password" name="password" placeholder="Password" required><br><br>
<fieldset>
   <div class="d-block my-3">
         <div class="form-check form-check-inline ">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="lecturer" required>
<label class="form-check-label" for="inlineRadio1">Lecturer</label>


</div>
          <div class="form-check form-check-inline">
      
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="student" required>
  <label class="form-check-label" for="inlineRadio2">Student</label>
</div>

         </div>
<input class="btn-lgn" type="submit" name="login" value="Login" onClick="ob=this.form.inlineRadioOptions;for(i=0;i<ob.length;i++){
    if(ob[i].checked){window.open(ob[i].value,'_self');};}"> </fieldset></form>
</div>
</div>
</center><br><br>
<center>
<h1 style="text-align:center;border:4px solid gray;background-color:black;opacity:.8;margin-top:10px;color:white;letter-spacing:8px;">NOT SIGNED UP YET?
SIGN UP BELOW<br></h1><br><br><br>
<div class="card bg-secondary mb-3" style="max-width: 20rem;">
 <div class="card-body">
<form method="post" action="signup.php">
<input class="box" type="text" name="username" placeholder="Choose a username"required><br><br>
<input class="box"  type="password" name="password" placeholder="Choose a password" required><br><br>
<input class="box"  type="text" name="address" placeholder="Address" required><br><br>
<input class="box" type="tel" name="contact" placeholder="Contact(xxxxxxxxxx)" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}"><br><br>
<input class="box"  type="email" name="email" placeholder="email" required><br><br>
 <div class="d-block my-3">
         <div class="form-check form-check-inline ">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" required>
<label class="form-check-label" for="inlineRadio1">Lecturer</label>


</div>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" required>
  <label class="form-check-label" for="inlineRadio2">Student</label>
</div>

         </div>
<input class="btn-lgn" type="submit" name="signup" value="Signup" required></form>
</div>
</div>
</center>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>



<?php
	$con=mysqli_connect("localhost","root","","lecturev1");
  mysqli_select_db($con,"lecturev1");
 

session_start();		
			
			
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
	 $userf = mysqli_real_escape_string($con,$_POST['inlineRadioOptions']); 
   $a='lecturer';
   $b='student';
   if($userf==$a){
       $sql = "SELECT u_nm,u_pwd,u_field FROM user WHERE u_nm = '$username' and u_pwd = '$password' and u_field='lecturer'" ;
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      /*$active = $row['active'];*/
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         /*session_register("$username");*/
         $_SESSION['login_user'] = $username;
         
         header("location: lecturer.php");
		
      }}
	  
	  elseif($userf==$b){
		 $sql2 = "SELECT u_nm,u_pwd,u_field FROM users WHERE u_nm = '$username' and u_pwd = '$password' and u_field='student'";
      $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      /*$active = $row['active'];*/
      
      $count = mysqli_num_rows($result2);
     if($count == 1) {
         /*session_register("$username");*/
         $_SESSION['login_user2'] = $username;
         
         header("location: student.php");  
	  }}
	  
	  
	  /*elseif($userf==$c){
		 $sql3 = "SELECT name,pass FROM admin WHERE name = '$username' and pass = '$password'";
      $result3 = mysqli_query($con,$sql3);
      $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
      /*$active = $row['active'];
      
      $count = mysqli_num_rows($result3);
     if($count == 1) {
         /*session_register("$username");
         $_SESSION['login_user3'] = $username;
         
         header("location: admin.php");  
	  }}*/
	  
}
?>


</body>

</html>