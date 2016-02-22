<?php
/*
	$time = time();

	$actual_time = date('d m Y',$time);
	echo 'The current time is '.$actual_time;*/


	/* $time = time();
	 $time_now = date('d M Y @ h:i:s',$time);
	 $actual_time = date('d M Y @ h:i:s',strtotime('+8 day'));
	 echo $actual_time.'<br>';
	 echo $time_now.'<br>';
		*/

/*	 $max = getrandmax();
	 $rand = rand(0,360);
	 echo $rand;
*/
	 if(isset($_POST['roll'])){
	 	$rand  = rand(1,6);
	 	echo 'You rolled a '.$rand;
	 }

?>


<form action="timestamp.php" method="post">
	
	<input type="submit" name = "roll" value = "Roll dice.">
</form>