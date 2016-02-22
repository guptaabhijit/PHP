<?php 
session_start();
if(!isset($_POST['secure'])){
$_SESSION['secure'] = rand(1000,9999);
}else{
	if($_SESSION['secure']==$_POST['secure']){
		echo "A match!";
	}
	else{
		echo 'Try again';
		$_SESSION['secure'] = rand(1000,9999);
	}
}
?>
<br>
<img src = "generate.php" /><br>

<form action="index.php" method="POST">
Type the value you see: <input type="text" name="secure" size="6">  <input type="submit" name="Submit">
</form>