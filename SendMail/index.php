<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = 'guptaabhijit31@gmail.com';
$subject = 'This is an email';
$body = 'This is a test email \n\n It wont destructive itself! sorry';
$headers = 'From: someone@phpacademy.org';

if($x = mail($to,$subject,$body,$headers))
{
	echo 'Email has been sent';
}
else{
	echo $x." <br>";
	echo 'Not Send';
}
echo "Abhijit";
?>