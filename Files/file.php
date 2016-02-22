<?php
/*
$directory = 'MyFile';

if($handle = opendir($directory.'/')){
	echo "Looking inside \'".$directory.'\':<br>';
}

while ($file=readdir($handle)) {
	if($file!='.'&&$file!='..'){
	echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
}

}*/
/*$file_o = 'MyFile/firsfile.txt'; 
if(file_exists($file_o)){
echo rand(1000,9999).md5($file_o).rand(1000,9999);
}
else echo "doesnt exist";

*/
//delete a file
/*
$filename = 'filetodelete.txt';
if(@unlink($filename))
		echo 'file has been deleted';
else
	echo 'file doesnt not exit';

*/


//rename a file
/*
$filename = 'filetorename.txt';
$rand = rand(10000,99999);

if(@rename($filename, $rand.'.txt')){
	echo 'File '.$filename.' has been renamed to '.$rand.'<br>';
}
else
	echo 'Error in renaming the file has been observed';
*/


	
?>