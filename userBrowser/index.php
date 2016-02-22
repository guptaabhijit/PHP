<?php

/*
$browser = get_browser(null,true);

$browser = $browser['browser'];
$browser = strtolower($browser);
if($browser != 'chrome'){
		echo 'You should use chrome baby!';
}
	
*/
if(isset($_GET['day'])){
$hello =  $_GET['day'];
echo $hello;
}
?>
<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type = "submit" value = "Submit">

</form>