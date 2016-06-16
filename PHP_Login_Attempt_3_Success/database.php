<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'photography';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOExeption $e){
	die("connection failed ". $e->getMessage());
}
?>