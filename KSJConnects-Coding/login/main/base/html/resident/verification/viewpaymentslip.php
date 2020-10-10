<?php
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}
$sql = "SELECT * FROM payment WHERE userID = '".$_GET['no']."'";
$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
$row = mysqli_fetch_array($result);
header("Content-type: " . $row["imageType"]);
echo $row["imageData"];