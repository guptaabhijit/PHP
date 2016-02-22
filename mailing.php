<!DOCTYPE html>
<html>
<body>
<?php
require_once 'swift/lib/swift_required.php';
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('YourEmailAddress@gmail.com')
  ->setPassword('********');
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('guptaabhijit31@gmail.com' => 'Abhijit'))
  ->setTo(array('guptaabhijit31@gmail.com'))
  ->setBody('<b>This is a test message</b>')
  ->setContentType('text/html');
$result = $mailer->send($message);
if($result == 1) echo "Message sent successfully";
else echo "Message sending failed";
?>
</body>
</html>
