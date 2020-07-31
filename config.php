<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("857734337574-uatr9hp91vn2al6vaoqsbts46cfn5fdi.apps.googleusercontent.com");
	$gClient->setClientSecret("xsU6JSluKFa4kFGNZw5LIcK3");
	$gClient->setApplicationName("Andrea");
	$gClient->setRedirectUri("http://localhost:8000/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
