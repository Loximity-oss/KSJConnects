<?php

  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }

  $salt = "fishcake";
  $hash2 = sha1($_POST["oldpass"].$salt);

  $sql = "SELECT password FROM `users` WHERE userID ='" . $_POST["userID"] . "'";
  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
  $row = mysqli_fetch_assoc($result);
  if ($count > 0) {
    if($row['password'] != $hash2)
        echo "<span class='pass-status'> Your current password does not match.</span>";
    else
        echo "<span class='pass-status'> Old Password Matches. </span>";

  } else {
    echo "<span class='pass-status'> Internal Error. </span>";
  }

?>