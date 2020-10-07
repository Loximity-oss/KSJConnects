<?php session_start();
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}
$sql = "SELECT * FROM users where users.userID = '" . $_SESSION['username'] . "'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
$list = mysqli_fetch_assoc($result);

if(!$_SESSION['username'])
	header("Location: ../../../../logout.php");
?>