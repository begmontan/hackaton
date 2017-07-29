<?php 
	// Connect to MySQL
	$link = mysql_connect('localhost', 'root', 'root');
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}

	// Make my_db the current database
	$db_selected = mysql_select_db('pokemon_php', $link);

	if (!$db_selected) {
	  // If we couldn't, then it either doesn't exist, or we can't see it.
	  $sql = 'CREATE DATABASE pokemon_php';

	  if (mysql_query($sql, $link)) {
	      echo "Database my_db created successfully\n";
	  } else {
	      echo 'Error creating database: ' . mysql_error() . "\n";
	  }
	}

	mysql_close($link);

	try{
		$base= new PDO('mysql:host=localhost; dbname=pokemon_php', 'root', 'root');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET UTF8");
	}catch(Exception $e){
		die('Error : ' . $e->getMessage());
		echo "Linea del error = " . $e->getLine();
	}
?>