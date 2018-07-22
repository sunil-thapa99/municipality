<?php 
	$server = '127.0.0.1';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbSchema = 'municipality';
	$pdo = new PDO('mysql:dbname=' . $dbSchema . ';host=' . $server, $dbUsername, $dbPassword, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 ?>