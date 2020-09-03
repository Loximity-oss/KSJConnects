<?php
session_start();
if (isset($_POST['login'])) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['pass'];

	$password = $_POST['pass'];
	$salt = "palsdkas;lkdasl;kd";
	$hash = md5($password,$salt);

	$con = mysqli_connect("localhost", "root", "", "ksjdb");
	if (!$con) {
		echo  mysqli_connect_error();
		exit;
	}
	$sql = "SELECT * FROM users where userID = '" . $_POST['username'] . "' and password ='" . $hash . "'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);

	if ($count == 1) {
		if ($row['verification'] != 1) {
			header("Location: error.html");
		} else {
			if ($row['userType'] == 'ADMIN') {
				header("Location: main/base/html/admin/index.php");
			} else if ($row['userType'] == 'STAFF') {
				header("Location: main/base/html/staff/index.php");
			} else if ($row['userType'] == 'USER') {
				header("Location: main/base/html/resident/index.php");
			} else if ($row['userType'] == 'GUEST') {
				header("Location: main/base/html/guest/index.php");
			} else {
				header("Location: error.html");
			}
		}
	}else{
		$_SESSION['error'] = 1;
		header("Location: index.php");
			
	}
}
