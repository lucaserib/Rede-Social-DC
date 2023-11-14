<?php 
	
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	require('vendor/autoload.php');

	define('INCLUDE_PATH_STATIC', 'http://localhost/socialmedia/LuCodex/Views/pages/');
	define('INCLUDE_PATH', 'http://localhost/socialmedia/');
	$app = new LuCodex\Application();

	$app -> run();


	
 ?>