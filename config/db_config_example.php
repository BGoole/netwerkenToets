<?php

$dbhost = 'localhost:3306';
$dbuser = 'user';
$dbpass = 'password';
$dbname = 'database';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>