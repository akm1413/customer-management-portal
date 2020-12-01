<!DOCTYPE html>

<html>
<title>Product</title>
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" type = "text/css">
		<link rel = "stylesheet" href = "ass2.css" type = "text/css">
		<script src = "https://ajax.googleapis.com/ajax/lib/jquery/1.12.4/jquery.min.js">
		<script type = "text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
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

		<div class = "header">
			<nav class = "navbar navbar-inverse navbar-fixed-top">
				<div class = "container">
					<div class = "navbar-header">
						<button type = "button" class = "navbar-toggle" data-toggle ="collapse" data-target = "#myNavbar">
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
							<span class = "icon-bar"></span>
						</button>
					</div>
					<div class = "collapse navbar-collapse" id = "myNavbar">
						<ul class = "nav navbar-nav navbar-right">
							<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>Settings </a></li>
							<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout </a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
		</div>
		
				
		
		<div class = "content" style = "min-height : 676px ;">
			<div class = "container">
				<h3 style = "text-align : center ; color : black ;">Change Password</h3>
			</div>
			
			<br>
			
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-6 col-sm-offset-5">
						<form>
							<input type = "text" name = "oldpassword" placeholder = "Old Password"> <br><br>
							<input type = "text" name = "newpassword" placeholder = "New Password"> <br><br>
							<input type = "text" name = "retypenewpassword" placeholder = "Re-type New Password"> <br><br>
							<button class = "btn btn-primary"><a href = "pwchange.php" style = "color : white ;">Change</a></button>
						</form>
					</div>
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