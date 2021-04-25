<?php

define('DB_HOST_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Jovana_1997@');
define('DB_NAME', 'db_movie');

function autoload($classname){
	//require_once "classes/" . $classname . ".class.php";
	require_once "classes/". str_replace("\\","/",$classname) . ".class.php";
}

spl_autoload_register('autoload');
?>