<?php 
require_once 'application/lib/Dev.php';

use application\core\Router;

/*Функция автозагрузки*/
spl_autoload_register(function($class){
	$path = str_replace('\\', '/', $class.'.php');
	if (file_exists($path)){
		require $path;
	}
});
/*Функция автозагрузки*/

session_start();

$router = new Router;
$router->run();