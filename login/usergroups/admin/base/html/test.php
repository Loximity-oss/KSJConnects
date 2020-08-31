<?php    
  print_r($_POST);
    $sql = "UPDATE `facilitieslist` SET `facName` = '" . $_POST['staticfacName'] . "', `facDesc` = '" . $_POST['staticfacDesc'] . "', `facMaxPax` = '" . $_POST['staticfacMaxPax'] . "' 
    WHERE `facilitieslist`.`facID` = '" . $_POST['staticfacID'] . "'";

echo $sql;



?>