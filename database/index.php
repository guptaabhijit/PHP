<?php
require 'connection.php';
?>


<form action="index.php" method="GET">
	Choose a food type:
	<select name = "uh">
	<option value = "u">Unhealthy</option>
	<option value = "h">Healthy</option>
	</select><br><br>
	<input type="submit" value="Submit">
</form>


<?php

if(isset($_GET['uh'])&&!empty($_GET['uh']))
{

    $uh = strtolower($_GET['uh']);
   

    
    $query = "SELECT food,calories FROM food WHERE healthy_unhealthy = '$uh'";
    //$query_run = mysqli_query($mysqlcon,$query);
    if($result =  $mysqlcon->query($query)){

	       if(mysqli_num_rows($result)==NULL){
	           //	echo mysqli_num_rows($result).'<br>';
	           echo 'No results found<br>';
	       }
	       else{
	               while($row = $result->fetch_assoc())
	               {
		                  $food = $row['food'];
		                  $calories = $row['calories'];
		                  echo $food.' '.$calories.'<br>';
	               }
                }
    }
    else{

	   echo "couldn't fetch result";
    }
}

?>
