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
			$sql2 = "SELECT merit,programTitle, programKey FROM activityList WHERE programKey = '".$_POST['program']."'";
			$result2 = mysqli_query($con, $sql2);
			$count2 = mysqli_num_rows($result2); //check how many matching record - should be 1 if correct
			echo $count2;
			echo $_POST['program'];
			$row2 = mysqli_fetch_assoc($result2);
			if ($count2 == 1) {
				$sql3 = "INSERT INTO `studentactivitylist` (`activityID`, `userID`, `programTitle`, `programMerit`) 
				VALUES (NULL, '".$row['userID']."', '".$row2['programTitle']."', '".$row2['merit']."')";
				$result3 = mysqli_query($con, $sql3);
				$sql4 = "UPDATE `merit` SET `merit` = `merit`+ '".$row2['merit']."' WHERE `merit`.`userID` = '".$row['userID']."'";
				$result4 = mysqli_query($con, $sql4);
				if($result3 && $result4){
					header("Location: succesful.html");
				} else {
					header("Location: notsuccessfull.html");
				}
				
			} else {
				header("Location: notfound.html");
			}
		}
	}else{
		$_SESSION['error'] = 1;
		header("Location: index.php?program='".$_POST['program']."'");
			
	}
}
