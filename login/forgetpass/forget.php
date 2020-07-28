<?php
if (isset($_POST['Go'])) {
	$to = $_POST['email'];
	$subject = 'KSJConnects Notification | Forget Password';
	$message = '
 
        A request for password change has been activated.
        You can change your password by visiting the link below.
        
         
        Please click this link to reset your password:
        http://60.48.188.31/KSJConnects/login/forgetpass/repforget.php?email=' . $_POST['email'] . '&pass=' . $_POST['pass'] . '
         
        ';
	$headers = 'From: ssah37@gmail.com';
	if (mail($to, $subject, $message, $headers))
		header("Location: succesful.html");
	else
		header("Location: error.html");
}
?>