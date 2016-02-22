<?php 

require 'connection.php';
require 'core.inc.php';

//alex 12345
//abhi pass123
//root abhijit
//josh asdfg
//echo $current_file;

if(loggedin()){

	$firstname = getfield('firstname');
	$surname = getfield('surname');
	echo "You 're logged in! "."$firstname $surname "."<a href='logout.php'>LogOut</a>";
	//echo '<br>'.getfield('firstname');
}
else
{
	include 'loginform.inc.php';
}


?>