<?php 

if(isset($_POST['submit'])){

$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$extension = strtolower(substr($name, strpos($name, '.')+1));
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$max_size = 209715;

if(isset($name))
{
	if(!empty($name)){
		//echo $name.' '.$size.' '.$type.' '.$tmp_name.'<br>';
		//echo sys_get_temp_dir();
		if(($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg'&&$size<$max_size){
		$location = 'uploads/';
			if(move_uploaded_file($tmp_name, $location.$name))
				echo 'Uploaded successfully';
			else echo 'Error ';
		}
		else {
			echo 'File must be jpg/jpeg and must be less than 2mb';
		}
	}
	else
	{
		echo 'Please choose a file';
	}

}
	
	
}

?>


<form action = "upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name = "file"><br><br>
<input type="submit" name="submit" value="Submit">

</form>
