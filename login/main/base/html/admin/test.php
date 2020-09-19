<?php    
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  print_r($_POST);
  print_r($_FILES);

?>