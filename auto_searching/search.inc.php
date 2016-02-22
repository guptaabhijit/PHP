<?php 


if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];
}

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'abhijit';


if(!empty($search_text)){

$mysqlcon = mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die('Not connected');

mysqli_select_db($mysqlcon,'a_database') or die('No such database');


 $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($mysqlcon,$search_text)."%'";
  
    if($result =  $mysqlcon->query($query)){

	       if(mysqli_num_rows($result)==NULL){
	           //	echo mysqli_num_rows($result).'<br>';
	           echo 'No results found<br>';
	       }
	       else{
	               while($row = $result->fetch_assoc())
	               {
		                  $name = $row['name'];
		                  echo $name.'<br>';
	               }
                }
    }
    else{

	   echo "couldn't fetch result";
    }



}




?>