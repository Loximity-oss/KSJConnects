<?php

  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT `no`,`name`,`id`,`year/course`,`matric`,`phone`,`address`,`religion`,`sex`,`parentjob`,`status`,`status_string`,`confirmation`,`dateApplied`,`dateAccepted` FROM `registration` WHERE userID = '" . $_POST["username"] . "' AND status = '1'";

  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
  $row = mysqli_fetch_assoc($result);

  if ($count > 0) {
      header("Content-Type: application/json");
      echo json_encode($row);
  } else {
    echo "<span class='status-available'> User ID not found. </span>";
  }
