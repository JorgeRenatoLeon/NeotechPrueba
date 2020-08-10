<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("");
	$gClient->setClientSecret("");
	$gClient->setApplicationName("Andrea");
	$gClient->setRedirectUri("http://localhost:8000/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
