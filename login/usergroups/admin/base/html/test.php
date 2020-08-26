<?php
if (isset($_POST['update'])) {
    print_r($_POST);
    $sql = "UPDATE `complaint` SET
     `complaint_str` = '" . $_POST['staticreason'] . "',
     `status` = '" . $_POST['staticstatus'] . "',
      `supervisor` = '" . $_POST['staticsupervisor'] . "' 
      WHERE `complaint`.`complaintID` = '" . $_POST['staticcomplaintid'] . "'";


    echo $sql;
}
?>