<?php
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    if(isset($_GET['username'])) {
        $sql = "SELECT imageType,picture,userID FROM users WHERE userID = '" . $_GET['username'] . "'";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
        header("Content-type: " . $row["imageType"]);
        echo $row["picture"];
        
        
	}
	mysqli_close($con);
?>