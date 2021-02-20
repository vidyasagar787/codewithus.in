<?php

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("vsagar787@gmail.com","My subject",$msg)) 
	echo 'mail sent';
else
	echo 'mail not sent';

?>