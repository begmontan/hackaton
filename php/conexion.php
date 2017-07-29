<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE PEPE";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>




<?php 
	// // Connect to MySQL


	// try{
	

	// 	$base= new PDO('mysql:host=localhost; dbname=pokemon_php', 'root', 'root');
	// 	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	$base->exec("SET CHARACTER SET UTF8");
	// }catch(Exception $e){
	// 	die('Error : ' . $e->getMessage());
	// 	echo "Linea del error = " . $e->getLine();
	// }
?>

