<?php
/*
$ip_address = $_SERVER['REMOTE_ADDR'];
$ip_blocked = array('127.0.0.1','100.1.1.1');
if (isset($_SERVER['HTTP_CLIENT_IP']))
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];



if(!empty($http_client_ip)){
		$ip = $http_client_ip;
}
elseif (!empty($http_x_forwarded_for)) {
	$ip = $http_x_forwarded_for;
}
else{
	$ip = $remote_addr;
}

echo $ip;*/
phpinfo();
?>