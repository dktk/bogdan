<?php

function Redirect($url, $permanent = false) {
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}

function sendMail($name, $subject, $phone, $email, $message) {
	$to      = 'calin.tuns@gmail.com';
	$standardSubject = 'Advanced Design - Contact message';
	$headers = 'From: webmaster@advanceddesign.ro' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
	mail($to, $standardSubject, $subject.$email . "\r\n" . $message, $headers);
}

function handlePost() {
	 $name = $_POST["name"];
	 $phone = $_POST["phone"];
	 $message= $_POST["message"];
	 $subject = $_POST["subject"];
	 $email = $_POST["email"];
	 
	 $url = "http://www.advanceddesign.ro/";
	 
	 if (endswith($_SERVER['HTTP_HOST'], ":10088"))
		 $url = "http://localhost:10088/";

	sendMail($name, $subject, $phone, $email, $message);
		 
	Redirect($url . "contact-thankyou.php");
 }
 
 handlePost();
?>