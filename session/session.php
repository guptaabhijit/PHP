<?php
/*
session_start();
$_SESSION['name'] = 'Abhi';
*/
setcookie('username','abhi',time()+2000);

setcookie('username','abhi',time()-2000);

//unset($_SESSION['name']);
 
?>