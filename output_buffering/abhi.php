<?php

	require 'conf.inc.php';

	foreach ($ip_blocked as $ip) {
		if($ip==$ip_address){
			echo 'You have been blocked since your government sucks!';
			die();
		}		

	}
?>


<h1>Welcome!</h1>