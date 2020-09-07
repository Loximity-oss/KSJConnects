<?php    
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $salt = "palsdkas;lkdasl;kd";
  $password = $_POST['staticpassword'];
  $hash2 = md5($password,$salt);
  $sql = "INSERT INTO `users` (`imageType`,`picture`,`userID`, `fullname`, `password`, `email`, `phone_no`, `userType`, `verification`, `bio`) 
  VALUES ('','0x0','" . $_POST['userID'] . "',
  '" . $_POST['fullname'] . "',
   '" . $_POST['password'] . "', 
   '" . $_POST['email'] . "',
    '" . $_POST['phoneno'] . "', '" . $_POST['userType'] . "' , '" . $hash . "', 'Default Bio');";
  $sql2 = "INSERT INTO `merit` (`userID`,`merit`) VALUES ('" . $_POST['userID'] . "','0');";

    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    echo $sql;
    mysqli_close($con);



?>