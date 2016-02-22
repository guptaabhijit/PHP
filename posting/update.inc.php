<?php 



if(isset($_POST['text'])){
	$text = $_POST['text'];
	if(!empty($text)){

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = 'abhijit';


	$mysqlcon = mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die('Not connected');

		mysqli_select_db($mysqlcon,'a_database') or die('No such database');


		$query = "INSERT INTO `data` VALUES('','".mysqli_real_escape_string($mysqlcon,$text)."')";

		if($result =  $mysqlcon->query($query)){
			echo 'Data inserted';
		}
		else{
			echo 'Fail';
		}

	}
	else{
		echo 'Please type something';
	}
}



?>