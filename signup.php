<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"lecturev1");

session_start();	

if(isset($_POST['signup'])){
	/*`u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_nm` varchar(250) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_field` varchar(50) NOT NULL,*/
	$username =$_POST['u_nm'];
	$email=$_POST['u_email'];
	$contact=$_POST['u_contact'];
	$pass=$_POST['u_pwd'];
	$add=$_POST['u_address'];
	$userf=$_POST['inlineRadioOptions'];
	$val = "SELECT name FROM users WHERE name='$username'" ;
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