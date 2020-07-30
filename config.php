<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1088505550775-ledne8l6cei3tad36i4un9h1dh9m3g5m.apps.googleusercontent.com");
	$gClient->setClientSecret("IXXSFmY0qjnFoF9a4SbqZuaW");
	$gClient->setApplicationName("Prueba Neotech Jorge");
	$gClient->setRedirectUri("http://www.proyecto-neotech-jorge.tk/NeotechPrueba/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
