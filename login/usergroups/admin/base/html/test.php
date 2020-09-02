<?php    
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }

    $sql = "INSERT INTO `facilitiesbooking` (`BookID`, `facID`, `facName`, `userID`, `dateStart`, `dateEnd`, `Approval`) 
    VALUES (NULL, '" . $_POST['facID'] . "', '" . $_POST['hiddenfacname'] . "', '" . $_POST['userID'] . "', '" . $_POST['dateStart'] . "', '" . $_POST['dateEnd'] . "', '0')";

    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    echo $sql;
    mysqli_close($con);



?>