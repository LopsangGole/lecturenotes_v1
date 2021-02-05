<?php
$con=mysqli_connect("localhost","root","","lecturev1");
// mysqli_select_db($con,"lecturev1");

session_start();	

if(isset($_POST['signup'])){
	/*`u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_nm` varchar(250) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_field` varchar(50) NOT NULL,*/
	$username =mysqli_real_escape_string($con, $_POST['u_nm']);
	$email=mysqli_real_escape_string($con, $_POST['u_email']);
	$contact=mysqli_real_escape_string($con, $_POST['u_contact']);
	$pass=mysqli_real_escape_string($con, $_POST['u_pwd']);
	$add=mysqli_real_escape_string($con, $_POST['u_address']);
	$userf=$_POST['inlineRadioOptions'];
	$val = "SELECT name FROM user WHERE name='$username'" ;
	$check=mysqli_query($con,$val);

  if (mysqli_num_rows($check) != 0)
  {
      echo "<script>alert('Username already exists.Try Different One');</script>";
  }

  else
  {
    
  
$sql = "insert into user (u_nm,u_pwd,u_address,u_contact,u_email,u_field) values('$username','$pass','$add','$contact','$email','$userf')";
      $result = mysqli_query($con,$sql);
echo "<script>alert('Signup Successful.Login Now.');</script>";
if($userf=='lecturer'){
	$sql2 = "insert into lecturer (u_nm) values('$username')";
	   $result = mysqli_query($con,$sql2);}
	   
echo "<script>location.href='login.php'</script>";
  }
}	

?>

<!-- if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
} -->