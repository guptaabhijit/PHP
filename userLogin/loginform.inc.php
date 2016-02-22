<?php

//require 'connection.php';
//require 'core.inc.php';

if(isset($_POST['username'])&&isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if(!empty($username)&&!empty($password)){
		//echo 'ok';

		$query = "SELECT id FROM users WHERE username = '".$mysqlcon->real_escape_string($username)."' AND password = '".$mysqlcon->real_escape_string($password_hash)."'";
		if($query_run = $mysqlcon->query($query)){

			if(mysqli_num_rows($query_run)==NULL){
				echo 'Invalid username';
			}
			else if(mysqli_num_rows($query_run)==1){
				foreach ($query_run as $query_row) {
					$id = $query_row['id'];
					$_SESSION['user_id'] = $id;
					header('Location :index.php');
					//echo $id.'<br>';
				}
			}
		}
		else{
			echo 'Query failed';
		}




	}
	else
	{
		echo 'You must supply a username and password';
	}
}

?>

<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type ="text" name = "username"> Password: <input type="password" name="password">
<input type="submit" value="Log in">


</form>