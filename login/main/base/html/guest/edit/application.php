<?php
print_r($_FILES);
session_start();
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}
if(isset($_POST['submit'])){    
    $date = date('Y-m-d');
    $imgData = addslashes(file_get_contents($_FILES['payslip']['tmp_name']));
    $imageProperties = getimageSize($_FILES['payslip']['tmp_name']);
    $imgData2 = addslashes(file_get_contents($_FILES['acadslip']['tmp_name']));
    $imageProperties2 = getimageSize($_FILES['acadslip']['tmp_name']);
    $sql = "INSERT INTO `registration` 
    (`no`, 
    `userID`, 
    `name`, 
    `id`, 
    `year/course`, 
    `matric`, 
    `phone`, 
    `address`, 
    `religion`, 
    `sex`, 
    `parentjob`, 
    `imgPaySlipType`,
    `parentpayslip`, 
    `imgAcadSlipType`,
    `acadslip`, 
    `status`, 
    `status_string`, 
    `confirmation`,
    `dateApplied`, 
    `dateAccepted`)
    VALUES (NULL, 
    '" . $_POST['userID'] . "', 
    '" . $_POST['name'] . "', 
    '" . $_POST['ic'] . "', 
    '" . $_POST['year/course'] . "', 
    '" . $_POST['matid'] . "', 
    '" . $_POST['phone'] . "', 
    '" . $_POST['address'] . "', 
    '" . $_POST['religion'] . "', 
    '" . $_POST['sex'] . "', 
    '" . $_POST['parentjob'] . "', 
    'application/pdf',
    '{$imgData}', 
    'application/pdf',
    '{$imgData2}', 
    '1', 
    'Empty', 
    '0', 
    '".$date."', 
    '0000-00-00')";
    $result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
    if($result){
        header ("Location: ../profile.php");
    } else {
        header ("Location: ../profile.php");
    }

}



?>