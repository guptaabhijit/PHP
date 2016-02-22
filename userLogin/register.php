<?php 
require 'core.inc.php';
require 'connection.php';
if(!loggedin()){
	//echo 'register please';
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&
isset($_POST['firstname'])&&
isset($_POST['surname'])
){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$password_hash = md5($password);
	
	if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)){
		if($password!=$password_again){
			echo 'Password Do not match';
		}
		else
		{
			$query = "SELECT `username` FROM `users` WHERE `username`='$username'";
			if($query_run = $mysqlcon->query($query)){
					if(mysqli_num_rows($query_run)==1){
						echo 'username Already exists';
					}else{
						//echo 'Ok';
						$query_insert = "INSERT INTO `users` VALUES ('','".$mysqlcon->real_escape_string($username)."','".$mysqlcon->real_escape_string($password_hash)."','".$mysqlcon->real_escape_string($firstname)."','".$mysqlcon->real_escape_string($surname)."')";
						if($query_run1 = $mysqlcon->query($query_insert)){
								//echo 'Successfully added<br>';	
								header('Location: register_success.php');

						}
						else
						{
							echo 'sorry couldnt add into database<br>';
						}

					}
			}
		}

	}
	else{
		echo 'Please fill all the details!';
	}
}

?>

<form action="register.php" method="POST">

Username:<br> <input type="text" name="username" value="<?php error_reporting(0); echo $username;?>"><br><br>
Password:<br><input type="password" name="password"><br><br>
Password again:<br><input type="password" name="password_again"><br><br>
Firstname:<br> <input type="text" name="firstname" value="<?php echo $firstname;?>"><br><br>
Surname:<br> <input type="text" name="surname" value="<?php echo $surname;?>"><br><br>
<input type="submit" name = "Register"><br><br>
</form>
<?php	
}
else if(loggedin())
{
	echo 'You are already registered and logged in';
}

?>