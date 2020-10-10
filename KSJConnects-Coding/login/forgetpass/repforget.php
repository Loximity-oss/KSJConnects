<?php
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
	echo  mysqli_connect_error();
	exit;
}
$password = $_GET['pass'];
$salt = "fishcake";
$hash2 = sha1($password.$salt);

$sql = "UPDATE `users` SET `password`= '$hash2' WHERE email = '" . $_GET["email"] . "'";

$result = mysqli_query($con, $sql);

if ($result) {
	echo '<!DOCTYPE html>
	<html lang="en">
		<script>
			setTimeout(function(){
			   window.location.href = "../../index.html";
			}, 10000);
		 </script>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
		<title>KSJ - Password changed.</title>
	
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
		<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	
	</head>
	
	<body>
	
		<div id="notfound">
			<div class="notfound">
				<img src="images/tick.png" alt="Paris" class="center" width="200" height="200">
				<h2>Your password has been resetted.</h2>
				<p>Please login to continue.</p>
				<p>You will be directed to the homepage in 10 seconds.</p>
			</div>
		</div>
	
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	
	</html>
	';
} else {
	header("Location: error.html");
}
?>