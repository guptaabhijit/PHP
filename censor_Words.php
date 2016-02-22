<?php


$find = array("alex",'billy','dale');
$replace = array('a**x','b***y','d**e');

if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
	 $user_input = $_POST['user_input'];
	 $user_input_lc = strtolower($user_input);
	 $user_input_new = str_ireplace($find, $replace, $user_input_lc);
	 echo $user_input_new;
}



?>

<hr>

<form action = "censor_Words.php" method = "POST">
<textarea name = "user_input" rows="6" cols="30">
	<?php
		echo $user_input;
	?>
</textarea>
<br><br>
<input type = "submit" value="Submit">


</form>