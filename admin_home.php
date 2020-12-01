<?php
include_once('admin_db.php');
$query="select * from user";
$result=mysqli_query($con,$query);
?>

<html>
<head>
<style>
table{
	font-size: 15px;
	font-family: candara;
	text-align: center;
	position: center;
}

a{
	background-color: red;
	color:black;
	text-align:center;
	font-family:comic sans;
	border: 1px solid black;
	height: 20px;
	width: 100px;
	padding:2px;
	/*margin: 10px;*/
}

</style>
</head>

<body bgcolor="#f5bdbc" text color="black">
<table border="4" width="1200" height="500" align="center" bordercolor="black">
<tr><center>
	<th colspan="15"><h1><u>Users</u></h1></th>
</tr>
<tr>
	<td><b>Cust Name</td>
	<td><b>Cust Email</td>
	<td><b>Cust Contact</td>
	<td><b>Cust Address 1</td>
	<td><b>Cust Address 2</td>
</tr>
<?php
	while($rows=mysqli_fetch_assoc($result))
	{
?>
<tr>
	<td><?php echo $rows['name']; ?></td>
	<td><?php echo $rows['email']; ?></td>
	<td><?php echo $rows['contact']; ?></td>
	<td><?php echo $rows['address1']; ?></td>
	<td><?php echo $rows['address2']; ?></td>
	<td><a href="#" style="font-size: 30px";> remove</td>

</tr>
<?php
	}
?>
<!-- <h2><a href="home.php" style="color:black;text-align:center;font-family:comic sans"><b>Logout</b></a></h2> -->
<h2><a href="welcome.php"><b>Logout</b></a></h2>
<!-- <h2><a href="home.php"><b>Logout</b></a></h2> -->
</font>
</body>
</html>