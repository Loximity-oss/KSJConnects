<?php
$to = 'dux7904@gmail.com';
$subject = 'LOCALHOST SUBJECT TEST';
$message = 'this is a test.';
$headers = 'From: ssah37@gmail.com';
if(mail($to,$subject,$message,$headers))
    echo 'sent';
else
    echo 'not sent.';
?>