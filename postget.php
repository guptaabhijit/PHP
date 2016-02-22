<?php

if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])){

	$day = htmlentities($_GET['day']);
	$date = htmlentities($_GET['date']);
	$year= htmlentities($_GET['year']);

	if(!empty($day)&&!empty($date)&&!empty($year))
	{
		echo 'It is '.$day.' '.$date.' '.$year;
	}
	else echo 'Please Fill in all details';
}

	
?>

<form action="postget.php" method="GET">

Day: <input type="text" name="day"><br><br>
Date: <input type="text" name="date"><br><br>
Year: <input type="text" name="year"><br><br>
<input type="submit" value="Submit">

</form>