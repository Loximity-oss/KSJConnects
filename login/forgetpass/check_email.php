<?php
if (!empty($_POST["email"])) {
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT * FROM users WHERE email ='" . $_POST["email"] . "'";
  $result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
  if ($count > 0) {
    echo "<span class='status-not-available'> Email Valid.</span>";
  } else {
    echo "<span class='status-available'> Invalid Email.</span>";
  }
}
?>