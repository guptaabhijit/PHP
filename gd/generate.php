<?php 
header("Content-Type: image/jpeg");




$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'abhijit';



$mysqlcon = mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die('Not connected');

mysqli_select_db($mysqlcon,'a_database') or die('No such database');

if(isset($_GET['id'])){
	$id  = $_GET['id'];

$query = "SELECT `email` FROM `users` WHERE `id`='".$mysqlcon->real_escape_string($id)."'";
	if($query_run = $mysqlcon->query($query)){
		if(mysqli_num_rows($query_run)==1){
		$email = $query_run->fetch_assoc()['email'];
		//echo $email;
		//echo 'YEs';
		}
		else $email = "No Id";
	}
	else {
		$email = "Something went wrong";
		
		}

}
else{
	$email = 'URL broken';
}

	//echo 'connected';


//$email = "guptaabhijit31@gmail.com";

$email_length = strlen($email);

$font_size = 4;

$image_height = imagefontheight($font_size);
$image_width = imagefontwidth($font_size) * $email_length;

$image = imagecreate($image_width,$image_height);

imagecolorallocate($image, 255, 255, 255);

$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0,$email, $font_color);

imagejpeg($image);

?>

