<?php 
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
	@$http_referer = $_SERVER['HTTP_REFERER'];
}



function loggedin(){

	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}
	else
		return false;

}
function getfield($field){

	global $mysqlcon;

	$query = "SELECT `$field` FROM `users` WHERE `id` = '".$_SESSION['user_id']."'";
	if($query_run = $mysqlcon->query($query)){
			foreach ($query_run as $query_row) {
					//echo 'help'.$query_row['$field'];
					return $query_row[$field];

					}
	}
	else
	{
		echo '<br>not';
	}

}
?>