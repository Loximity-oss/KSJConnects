<?php

  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT * FROM `facilitieslist` WHERE facID ='" . $_POST["facID"] . "'";
  $result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
  $row = mysqli_fetch_assoc($result);
  if ($count > 0) {
      header("Content-Type: application/json");
      echo json_encode($row);
  } else {
    echo "<span class='status-available'> Facility not found. </span>";
  }

?>