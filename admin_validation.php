<?php

session_start();

 $con = mysqli_connect('localhost','root','12345');

 mysqli_select_db($con,'tcs_project');

$email = $_POST['email'];
$pass = $_POST['password'];

 $s = " select * from admin where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	// echo "Hello Admin !!";
	header('location:admin_home.php');
}
else{

	echo "Invalid credentials";
	// $_SESSION["error"] = $error;
	// header('location:admin_login.php');
	
	}

?>
