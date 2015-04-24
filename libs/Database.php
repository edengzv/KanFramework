<?php 
/*
http://php.net/manual/zh/pdo.construct.php
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
*/
class Database extends PDO{

	public function __construct(){
		parent::__construct(DB_TYPE.':dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
	}
}
