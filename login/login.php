<?php
session_start();
if (isset($_POST['login'])) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['pass'];
	$con = mysqli_connect("localhost", "root", "", "ksjdb");
	if (!$con) {
		echo  mysqli_connect_error();
		exit;
	}
	$sql = "SELECT * FROM users where userID = '" . $_POST['username'] . "' and password ='" . $_POST['pass'] . "'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
	if ($count == 1)
		if($row['userType'] == 'ADMIN'){
			header("Location: usergroups/admin/admin_dashboard.html");
		} else if ($row['userType'] == 'STAFF'){
			header("Location: usergroups/staff/staff_dashboard.html");
		} else if ($row['userType'] == 'USER'){
			header("Location: usergroups/admin/admin_dashboard.html");
		} else if ($row['userType'] == 'GUEST'){
			header("Location: usergroups/admin/admin_dashboard.html");
		}

	else {
		echo ' <br>
		<span class="txt1 p-b-9">
			Your username/password is incorrect.
		</span>
		';

	}
} 
?>