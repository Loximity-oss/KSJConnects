<?php
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    if($_GET['slip'] == 1) { //payslip
        $sql = "SELECT imgPaySlipType,parentpayslip FROM registration WHERE no = '".$_GET['no']."'";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imgPaySlipType"]);
        echo $row["parentpayslip "];

    } else if ($_GET['slip'] == 2){ //acaderesults
        
        $sql = "SELECT imgAcadSlipType,acadslip FROM registration WHERE no = '".$_GET['no']."'";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        header("Content-type: " . $row["imgAcadSlipType"]);
        echo $row["acadslip"];
    
    }
	mysqli_close($con);
?>