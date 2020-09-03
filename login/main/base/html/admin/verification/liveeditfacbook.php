<?php

  $con = mysqli_connect("localhost", "root", "", "ksjdb");
  if (!$con) {
      echo  mysqli_connect_error();
      exit;
  }
  $sql = "SELECT `facilitieslist`.`facID`,`facilitieslist`.`facName` FROM `facilitieslist` WHERE 
  (`facilitieslist`.`facID`) NOT IN (select `facilitiesbooking`.`facID` from `facilitiesbooking` WHERE 
  `facilitiesbooking`.`dateStart` NOT BETWEEN '" . $_POST['dateStart'] . "'  AND '" . $_POST['dateEnd'] . "' 
  AND `facilitiesbooking`.`dateEnd` NOT BETWEEN '" . $_POST['dateStart'] . "'  AND '" . $_POST['dateEnd'] . "' 
  AND `facilitiesbooking`.`Approval` = 0 AND `facilitiesbooking`.`Approval` != 1 )";

  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
  $array = array();
   if ($count > 0) {
      while($row=mysqli_fetch_assoc(($result))){
        array_push($array,$row['facID'],$row['facName']);
        
      }
      header("Content-Type: application/json");
      echo json_encode($array);      
  } else {
    echo "<span class='status-available'> Error </span>";
  } 
?>