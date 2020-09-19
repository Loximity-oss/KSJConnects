<?php
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    if($_GET['slip'] == 1) { //vehicle data type
        $sql = "SELECT vehicleDataType,vehicleData FROM stickerapplication WHERE userID = '".$_GET['no']."'";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["vehicleDataType"]);
        echo $row["vehicleData"];

    } else if ($_GET['slip'] == 2){ //licensedatatype
        
        $sql = "SELECT licenseDataType,licenseData FROM stickerapplication WHERE userID = '".$_GET['no']."'";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        header("Content-type: " . $row["licenseDataType"]);
        echo $row["licenseData"];
    
    }
	mysqli_close($con);
?>