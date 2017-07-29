<?php 
	// Connect to MySQL





	try{
		$link=new PDO("CREATE DATABASE IF NOT EXISTS pokemon_php");
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base= new PDO('mysql:host=localhost; dbname=pokemon_php', 'root', 'root');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET UTF8");
	}catch(Exception $e){
		die('Error : ' . $e->getMessage());
		echo "Linea del error = " . $e->getLine();
	}
?>