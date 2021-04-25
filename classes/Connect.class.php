<?php

class Connect{
	function db_connect(){
	static $connection;

	if(!isset($connection)){
	$host = "localhost";
	$user = "root";
	$pass = "Jovana_1997@";
	$dbname = "db_movie";

	$connection = mysqli_connect($host, $user, $pass, $dbname);}
	 if($connection === false){
		 return mysqli_connect_error();
	 }
	return $connection;


	}
}
 
?>