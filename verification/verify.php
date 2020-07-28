<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>KSJConnects - Verification Process</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body> 
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        <?php
        $con = mysqli_connect("localhost", "root", "", "ksjdb");
        if (!$con) {
            echo  mysqli_connect_error();
            exit;
        }

        if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
            // Verify data
            $sql = "SELECT * FROM users where email = '" . $_GET['email'] . "' and verification ='" . $_GET['hash'] . "'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
            $row = mysqli_fetch_assoc($result);
            if ($count == 1){
                $sql = "UPDATE users SET `verification` = 1 where email = '" . $_GET['email'] . "' and verification = '" . $_GET['hash'] . "' ";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo "succ";
                }
            }
        }

             
        ?>
        <!-- stop PHP Code -->
 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>

