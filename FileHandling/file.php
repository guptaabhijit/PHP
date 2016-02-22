<?php

$filename = 'name.txt';
$handle = fopen($filename, 'r');
$datain = fread($handle, filesize($filename));

$names_array = explode(',',$datain);

foreach ($names_array as $name) {
	echo $name.' ';;
	# code...
}
echo '<br>';
$my_array = array('Alex','Christine','Billy','Dale');
$string = implode('->', $my_array);
echo $string;
?>