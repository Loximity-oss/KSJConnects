<?php    
  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  
  print_r($_POST);
  print_r($_FILES);
  $imgData = addslashes(file_get_contents($_FILES['proof']['tmp_name']));
  $imageProperties = getimageSize($_FILES['proof']['tmp_name']);

  $sql = "UPDATE `payment` SET `imageData` = '{$imgData}' , `imageType` = '{$imageProperties['mime']}',  `paymentMethod` = 'Manual Payment', `status` = '3'
      WHERE `payment`.`userID` = '" . $_POST['userID_c'] . "'";
  $result = mysqli_query($con, $sql);
  echo $sql;
?>