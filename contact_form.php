<?php
require_once 'swift/lib/swift_required.php';

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){

	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];

	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
		//echo "Hi";
		
		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  		->setUsername('YourEmailAddress@gmail.com')
  		->setPassword('*********');
		$mailer = Swift_Mailer::newInstance($transport);
		$message = Swift_Message::newInstance('Contact form submitted')
						->setFrom(array($contact_email => 'Abhijit'))
  					  	->setTo(array('guptaabhijit31@gmail.com'))
  						->setBody($contact_name."\n".$contact_text)
  						->setContentType('text/html');
		$result = $mailer->send($message);

		if($result == 1) echo "Message sent successfully";
		else echo "Message sending failed";

	}
	else {
		echo 'All fields are required';
	}

}
?>

<form action="contact_form.php" method = "POST">
Name:<br><input type="text" name="contact_name"><br><br>
Email address:<br><input type="text" name="contact_email"><br><br>
Message:<br>
<textarea name="contact_text" rows="6" cols="30"></textarea><br><br>
<input type="submit" value="Send">

</form>
