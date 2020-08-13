<?php
if (isset($_POST['register'])) {
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    //randomize md5 address for verification.
    $hash = md5(rand(0, 1000));


    //insert into sql.
    $sql = "INSERT INTO `users` (`imageType`,`picture`,`userID`, `fullname`, `password`, `email`, `phone_no`, `userType`, `verification`, `bio`) VALUES ('','0x0','" . $_POST['username'] . "','" . $_POST['fullname'] . "', '" . $_POST['pass'] . "', '" . $_POST['email'] . "', '" . $_POST['phonenumber'] . "', 'GUEST' , '" . $hash . "', 'Default');";
    $sql2 = "INSERT INTO `merit` (`userID`,`merit`) VALUES ('" . $_POST['username'] . "','0');";
    $result = mysqli_query($con, $sql);  
    $result2 = mysqli_query($con, $sql2); 

    if ($result) {
        $to = $_POST['email'];
        $subject = 'KSJConnects SIGN UP | Verification E-mail';
        $message = '
 
        Thanks for signing up!
        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
        
         
        Please click this link to activate your account:
        http://118.101.107.162/KSJConnects/verification/verify.php?email=' . $_POST['email'] . '&hash=' . $hash . '
        ';
        $headers = 'From: ssah37@gmail.com';
        if (mail($to, $subject, $message, $headers))
            header("Location: succesful.html");
        else
            header("Location: error.html");
    } else {
        header("Location: error.html");
    }
}
