<?php

session_start();

$con=mysqli_connect('localhost','root','12345');
$dbconnect1=mysqli_select_db($con, 'tcs_project');

$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['password'];
$contact=$_POST['contact'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];

$s= "select * from user where email= '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Email Already Registered";
}
else
{
	$reg= "insert into user (name, email, password, contact, address1, address2) values ('$name', '$email', '$pass', '$contact', '$add1', '$add2')";
	mysqli_query($con,$reg);
	echo "Registration Successful!"; 
	header('location:login.php');
	
}
mysqli_close($con);
?>