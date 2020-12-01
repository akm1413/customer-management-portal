<?php
session_start();
?>

<html lang="en">
<head>
	<title>Login</title>

	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" type = "text/css">
	<link rel = "stylesheet" href = "ass2.css" type = "text/css">
	<script src = "https://ajax.googleapis.com/ajax/lib/jquery/1.12.4/jquery.min.js">
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<nav class = "navbar navbar-inverse navbar-fixed-top">

		<div class = "container">
			<a class="navbar-brand" href="welcome.php">Dispur Wireless</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
			<div class = "collapse navbar-collapse" id = "myNavbar">
				<ul class = "navbar-nav navbar-right">
					<li><a href = "#"><a href = "register.php"><span class = "glyphicon glyphicon-user"></span>&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></li>

					<li class="dropdown">


				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class = "glyphicon glyphicon-log-in">&nbsp;Login
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php">As a customer</a></li>
					<li><a href="admin.php">As an admin</a></li>
				</ul>
			</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action="custvalidation.php" method="post">

									<span class="contact3-form-title">
										Welcome to Dispur Wireless
									</span>


									<div class="wrap-input3 validate-input">
										<input class="input3" type="email" name="email" placeholder="Email"  required>
										<span class="focus-input3"></span>
									</div>

									<div class="wrap-input3 validate-input" data-validate="Enter a proper password" >
										<input class="input3" type="password" name="password" placeholder="Password" required >
										<span class="focus-input3"></span>
									</div>

									<a href="#" class="input3">
										Forgot Password?
									</a>

									<br><br><br>

									<div class="container-login100-form-btn m-t-17">
										<button type="submit" class="contact3-form-btn">
											Sign In
										</button>
										<?php
                    					if(isset($_SESSION["error"])){
                       					 $error = $_SESSION["error"];
                        					echo "<span>$error</span>";
                    					}
                					?>
									</div>
									<br><br>

									<div class="w-full text-center p-t-55">
										<span class="txt2">
											Not a member?
										</span>
									&nbsp;
										<a href="register.php" class="txt2 bo1">
											Sign up now
										</a>
									</div>
									
								</form>
							</div>
						</div>
					</div>



	<div class = "footer">
		<div class = "container">
			<p style = "text-align : center">Copyright (c) Dispur Wireless. All Rights Reserved | Contact Us : +91 90000 00000</p>
		</div>
	</div>


</body>
</html>

<?php
    unset($_SESSION["error"]);
?>