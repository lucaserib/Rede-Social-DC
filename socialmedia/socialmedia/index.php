<?php 
	
	session_start();
	require('vendor/autoload.php');

	define('INCLUDE_PATH_STATIC', 'http://localhost/socialmedia/LuCodex/Views/pages/');
	define('INCLUDE_PATH', 'http://localhost/socialmedia/');
	$app = new LuCodex\Application();

	$app -> run();


	
 ?>