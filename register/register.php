<?php
if (isset($_POST['register'])) {
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }
    //todo check userid
    $sql = "INSERT INTO `users` (`userID`, `fullname`, `password`, `email`, `phone_no`, `userType`, `verification`) VALUES ('" . $_POST['username'] . "',
     '" . $_POST['fullname'] . "', '" . $_POST['pass'] . "', '" . $_POST['email'] . "', '" . $_POST['phonenumber'] . "', 'GUEST' , '0');";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: succesful.html");
      } else {
        header("Location: error.html");
      }
}
?>