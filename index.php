<?php
	
	//Shadowlove1111 - Random white American Girl

	/*@mysqli_connect('localhost','root','abhijit') ;

	if(mysqli_connect_errno())
	{
		die('Can\'t Connect');
	}
	else{
		echo "Connected!";
	}*/
/*
	$string = 'This iS a string';
	if(preg_match("/\bis/i", $string))
	{
			echo "Yup";
	}
	else{
			echo "No";
	}

*/
/*
	function myName(){

		echo 'Abhijit';
	}

	echo 'My name is ';
	myName();	
*/

/*
	function add($a,$b)
	{
		return $a + $b;
	}

	echo add(10,20);
*/

/*
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function ip()
	{
		//global $user_ip;
		echo 'The server IP address is: '.$user_ip;
	}

		ip();

*/


/*
		$string = 'This is an example string & I am smart fellow .';
		$count = str_word_count($string,1,'.&');
		print_r($count);

*/
		/*
		
		$string = 'This is an example string & I am the fastest running creature on this planet Earth.';
		$shuffle =  str_shuffle($string);
		$rev = strrev($string);
		echo $rev.'<br>';
		echo $shuffle;
		*/
/*
		$string = "This is my essay. I am going to be talking about php.";
		$string_two = "Hello";
		similar_text($string, $string_two,$result);
		echo $result.'<br>';
		echo strlen($string_two);
*/
		/*
		$string = '&nbsp;Hello I am new to PHP&nbsp;';
		$string_trimmed = trim($string);
		echo $string_trimmed.'<br>';
		echo $string;
	*/

		/*$string = 'This is a <img src ="image.jpg"> string'.
		echo addslashes($string);
			*/
		/*$s = 'This is a <img src ="image.jpg"> string';
		$str = htmlentities(addslashes($s));
		echo stripslashes($str); 
		*/

		/*$food = array('Pasta'=>300,'Pizza'=>1000,'Salad'=>150);
		$food['Noodles']  = 350;
		print_r($food);
		//echo $food['Noodles'];*/


		//Multi-dimensional Arrays
/*
		$food = array('Healthy'   =>  
								     array('Salad','Vegetables'),
					  'UnHealthy' => 
					                 array('Pizza','Pasta')					
						);

		echo $food['Healthy'][0];
*/

/*
		$food = array('Healthy'   =>  
								     array('Salad','Vegetables','Sandwich'),
					  'UnHealthy' => 
					                 array('Pizza','Pasta','Burger')					
						);

		foreach ($food as $element => $item) {
			echo '<strong>'.$element.'</strong><br>';
			foreach ($item as $a) {
				echo $a.'<br>';
			}
		}
*/
/*
		//include 'headers.inc.php';
		include 'header.inc.php';	
		//$var1 = 'String';
		echo 'There is something i want u to see'.$var1;

*/
		/*require_once 'headers.inc.php';
		require_once 'headers.inc.php';
*/


/*
		function has_space($string){
			if(preg_match('/ /', $string))
				return true;
			else 
				return false;
		}

		if (has_space('This_hasspace')){
			echo 'Yes';

		}
		else {
			echo 'no';
		}
*/
/*
		$string = 'Abhijit';
		$length =strlen($string);
		

		for($x = 1 ; $x <= $length; $x++)
		{
			echo $x.'<br>';
		}
*/
	/*	$string = 'I Could Be Any Case.';

		$string_lower = strtolower($string);

		$string_upper = strtoupper($string);


		echo $string_lower.'<br>';
		echo $string_upper;
		
		*/
/*
		$offset = 0;
		$find = 'aaaa';
		$find_length = strlen($find);

		$string = ' This is my project and This is going to be awesome';

		while($string_position = strpos($string, $find,$offset)+1){
			echo '<strong>'.$string_position.'<br>';
			$offset = $string_position + $find_length; }
			$ans = strpos($string, $find);
			echo  $ans;
		*/

/*
			substr_replace();
*/
			/*
			$string = 'This part don\'t search. This part search.';
			$string_new = substr_replace($string,'Abhijit',29,4);

			echo $string_new;
			*/


			/*$find = array(" is ",'example','string');
			$replace = array(' IS ','','STRING');
			$string = 'This is a string, and is an example.';
			$new_string = str_replace($find, $replace, $string);
			echo $new_string;
			*/
	?>	
