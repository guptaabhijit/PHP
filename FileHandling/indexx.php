<?php

if(isset($_POST['text'])){

	$name = $_POST['text'];
	
	if(!empty(($name)))
	{
	
	$handle = fopen('/var/www/html/newBoston/FileHandling/names.txt', 'a');
	fwrite($handle, $name."\n");
	fclose($handle);

	$readin = file('names.txt');

	foreach ($readin as $fname) {
		# code...
		echo $fname.',';
	}

}
	else{
	echo 'Please type a name';
}

}
?>



<form action="indexx.php" method="POST">

<input type = "text" name = "text">
<input type="submit" name="Submit">

</form>






