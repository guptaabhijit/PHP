<?php 
require 'connection.php';

if(isset($_POST['search_name'])){
$search_name  = $_POST['search_name'];
	if(!empty($search_name)){
	//	global $mysqlcon;
		$query = "SELECT name FROM names WHERE name LIKE '%".mysqli_real_escape_string($mysqlcon,$search_name)."%'";
		if($query_run = $mysqlcon->query($query)){

			if(mysqli_num_rows($query_run)==NULL){
				echo 'No result fetch';
			}
			else{
				foreach ($query_run as $query_row) {
					$name = $query_row['name'];
					echo $name.'<br>';
				}
			}
		}
		else{
			echo 'Query failed';
		}


	}

}

?>


<form action="search.php" method = "POST">
Name: <input type="text" name = "search_name">
<input type = "submit" name = "Submit">
</form>