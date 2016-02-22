<?php 
require 'connection.php';

$user_ip = $_SERVER['REMOTE_ADDR'];


function ip_add($ip){

	global $mysqlcon;
	$query = "INSERT INTO hit_ip VALUES ('$ip')";
	if($query_run = $mysqlcon->query($query)){
		
		echo 'YEs';
	}
	else echo 'Didnt execute!';

}

function ip_exists($ip){
	//global $user_ip;
	global $mysqlcon;
	$query = "SELECT ip FROM hit_ip WHERE ip = '$ip'";
	if($query_run = $mysqlcon->query($query)){
		$query_num_rows = mysqli_num_rows($query_run);
		if($query_num_rows==0){
			echo "NO it doesnt exist";
			update_count();
			ip_add($ip);
			return false;
		}
		else if($query_num_rows>=1){
			echo "Exists";
			return true;
		}

	//	echo "YES";


	}
	else echo 'NO';

	//echo $user_ip;

}

function update_count(){

	global $mysqlcon;
	$query = "SELECT count FROM hit_count";
	if($query_run = $mysqlcon->query($query))
	{

		//echo 'here';
		$count = $query_run->fetch_assoc()['count'];
		$count_inc = $count + 1;

		$query_update = "UPDATE hit_count SET count = '$count_inc'";
		if($query_update_run = $mysqlcon->query($query_update)){
			echo 'OK.';
		}
	}


}
//update_count();
//ip_add($user_ip);
ip_exists($user_ip);

?>