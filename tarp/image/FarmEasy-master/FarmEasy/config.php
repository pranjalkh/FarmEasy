<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mock123');
define('DB_DATABASE', 'farmeasy');
$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(!$connection)
	die("Database Connection Failed!");
?>