<?php
	
	session_start();

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH', 'http://localhost/projeto01_teste/');
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
?>