<?php
echo 'salt gen';
$password = "123";
$salt = "palsdkas;lkdasl;kd";
$hash = sha1($password,$salt);
echo '<b>'.$hash;

?>