<?php
if (!empty($_POST["username"])) {
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT * FROM users WHERE userID ='" . $_POST["username"] . "'";
  $result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
  if ($count > 0) {
    echo "<span class='status-not-available'> Username Not Available.</span>";
  } else {
    echo "<span class='status-available'> Username Available.</span>";
  }
}
?>