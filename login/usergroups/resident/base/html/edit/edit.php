<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}

print_r($_POST);
if (isset($_POST['bioedit'])) {
    $sql  = "UPDATE `users` SET `bio` = '" . $_POST['bio'] . "' WHERE `users`.`userID` = '" . $_SESSION['username'] . "'";
    $result = mysqli_query($con, $sql);
    if ($result) 
        header ("Location: ../profile.php");
    else
        header ("Location: ../profile.php");


}
else if (isset($_POST['passwordedit'])){
    if($_SESSION['password'] == $_POST['oldpass']){
        $sql  = "UPDATE `users` SET `password` = '" . $_POST['newpass'] . "' WHERE `users`.`userID` = '" . $_SESSION['username'] . "'";
        $result = mysqli_query($con, $sql);
        if ($result) 
            header ("Location: ../profile.php");
        else
            header ("Location: ../profile.php");
    } else {
        header ("Location: ../profile.php");
    }


} else if(isset($_POST['editImage'])){
    $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
    $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
    $sql = "UPDATE `users` SET `picture` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `users`.`userID` = '" . $_SESSION['username'] . "'";
    $result = mysqli_query($con, $sql);
    if($result){
        header ("Location: ../profile.php");
    } else {
        header ("Location: ../profile.php");
    }

}
?>