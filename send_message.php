<?php
define('INCLUDE_CHECK', true);
require 'mail.php';

        $name	 	= $_POST['name'];
        $content 	= $_POST['content'];
        $mail	 	= $_POST['email'];
        $phone	 	= $_POST['mobile'];

	date_default_timezone_set('Asia/Calcutta');
	$timeStamp = date('H:i d M Y');

	$briefs = $content."\n\nRegards,\n".$name."\nM: ".$phone;

	$forSub = $name."'s Message";

	mailer($name, "abhijithcs1993@gmail.com", $forSub , $briefs, $mail);

	echo ' <script>window.location = "success.html";</script> ';
?>




