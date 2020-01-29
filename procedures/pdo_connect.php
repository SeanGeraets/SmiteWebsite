<?php

$server_name = 'localhost';
$db_name = 'smite_site';
$user_name = 'root';
$password = 'root';

try{
	$connect = new PDO("mysql:host=$server_name; db_name = $db_name", $user_name, $password);
	
	$connect->exec("use smite_site");
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//echo 'connected';
} catch (PDOException $connect_error) {
		die('Oops, something went wrong'.$connect_error);
	
}


?>