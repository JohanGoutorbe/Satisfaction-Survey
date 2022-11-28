<?php
session_start();
$db_username = 'root';
$db_password = '';
$db_name = 'DB_projet';
$db_host = 'localhost';

try {
	$db = new PDO('mysql:host=localhost;dbname=DB_projet', $db_username, $db_password);
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage() . "<br>");
}