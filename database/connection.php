<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'abhijit';


$mysqlcon = mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die('Not connected');

mysqli_select_db($mysqlcon,'a_database') or die('No such database');
	//echo 'connected';



?>
