<?php
session_start();

define('USER',"officecequalit");
define('PASSWD',"Bimbamboum22");
define('SERVER',"officecequalit.mysql.db");
define('BASE',"officecequalit");

$dsn = "mysql:dbname=".BASE.";host=".SERVER;

try {
	$db = new PDO($dsn,USER,PASSWD);
}
catch (PDOException $e) {
	die('Erreur : ' . $e->getMessage() . "<br>");
}