<?php
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}
$date = date('Y-m-d');
if (isset($_POST['accept'])) {
    $sql = "UPDATE `registration` SET `status` = '2', `status_string` = '" . $_POST['staticstatus_string'] . "', `dateAccepted` = '" . $date . "' WHERE `registration`.`no` = '" . $_POST['appid'] . "' ";
    $sql2 = "UPDATE `roomlist` SET `userID` = '" . $_POST['staticuserID'] . "' WHERE `roomlist`.`roomID` = '" . $_POST['roomID'] . "'";

    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));

}

if (isset($_POST['reject'])) {
    $sql = "UPDATE `registration` SET `status` = '3', `status_string` = '" . $_POST['staticstatus_string'] . "', `dateAccepted` = '$date' WHERE `registration`.`no` = '" . $_POST['appid'] . "' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "The user has been rejected.",
                icon: "success",
                button: "Ok",
              }); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "Something went wrong.",
                icon: "error",
                button: "Ok",
              }); </script>';
    }
}
?>