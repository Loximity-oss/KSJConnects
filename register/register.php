<?php
if (isset($_POST['register'])) {
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }
    //todo check userid

    $hash = md5(rand(0, 1000));
    $sql = "INSERT INTO `users` (`userID`, `fullname`, `password`, `email`, `phone_no`, `userType`, `verification`) VALUES ('" . $_POST['username'] . "',
     '" . $_POST['fullname'] . "', '" . $_POST['pass'] . "', '" . $_POST['email'] . "', '" . $_POST['phonenumber'] . "', 'GUEST' , '" . $hash . "');";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $to = $_POST['email'];
        $subject = 'KSJConnects SIGN UP | Verification E-mail';
        $message = '
 
        Thanks for signing up!
        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
        
         
        Please click this link to activate your account:
        http://60.48.188.31/KSJConnects/verification/verify.php?email=' . $_POST['email'] . '&hash=' . $hash . '
         
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
