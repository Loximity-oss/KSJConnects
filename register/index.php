<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>KSJConnects Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="register.php" method="POST" class="login100-form validate-form">

					<span class="login100-form-title p-b-43">
						Create your KSJConnects account
					</span>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="fullname">
						<span class="focus-input100"></span>
						<span class="label-input100">Full Name</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" id="username" onblur="checkAvailability()" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">User ID</span> 
					</div>
						<span id="user-availability-status"></span> 

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" id="email" onblur="checkAvailability_email()"  type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
						<span id="email-availability-status"></span> 

					<div class="wrap-input100 validate-input" data-validate="Phone number is required">
						<input class="input100" type="text" name="phonenumber">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="verify_pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Verify Password</span>
					</div>
					<!-- Register Button-->
					<div class="container-login100-form-btn">
						<input type="submit" name="register" value="Register"  class="login100-form-btn"></input>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or <a href="../login/index.php">log in</a>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!--===============================================================================================-->
	<script>
		button_user = document.getElementById('username');
		button_email = document.getElementById('email');
		function checkAvailability() {
			jQuery.ajax({
				url: "check_availability.php",
				data: 'username=' + $("#username").val(),
				type: "POST",
				success: function(data) {
					$("#user-availability-status").html(data);
				},
				error: function() {}
			});
		}

		function checkAvailability_email() {
			//if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
			jQuery.ajax({
				url: "check_email.php",
				data: 'email=' + $("#email").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
				},
				error: function() {}
			});
		}
	</script>


</body>

</html>