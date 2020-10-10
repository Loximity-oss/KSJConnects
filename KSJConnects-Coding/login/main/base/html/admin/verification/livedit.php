<?php

  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT `userID`,`fullname`,`password`,`email`,`phone_no`,`userType`,`verification` FROM `users` WHERE  userID ='" . $_POST["username"] . "'";
  $result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
  $row = mysqli_fetch_assoc($result);
  if ($count > 0) {
    echo "<span class='status-available'> User ID valid. </span>";
  } else {
    echo "<span class='status-available'> User ID not found. </span>";
  }

?>