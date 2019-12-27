<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];

	$toEmail = "test@test.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	/*if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}*/
}
require_once "contact-view.php";
?>