<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

	<title>INSERTAR REGISTRO</title>
</head>
<body>

	<h1>RESULTADO DE LA CONSULTA...</h1>

	<?php 

	$db_host="localhost";
	$db_database="pokemon_php";
	$db_usuario="root";
	$db_password="root";

	$conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_database);

	$nombre_entrenador=$_GET["nombre_entrenador"];
	$apellido_entrenador=$_GET["apellido_entrenador"];


	if (mysqli_connect_errno()) {
		echo "ERROR DE BBDD";
		exit();
	}
	mysqli_select_db($conexion,$db_database) or die ("NO SE ENCUENTRA LA BBDD");


	$query = "DELETE FROM entrenador WHERE NOMBRE_ENTRENADOR='$nombre_entrenador' AND APELLIDO_ENTRENADOR='$apellido_entrenador'";

	$respuesta = mysqli_query($conexion,$query);

	if ($respuesta==false) {
		echo "ERROR EN LA CONSULTA";
	}
	else{echo "REGISTRO GUARDADO";}


	?>
	<br>
	<a href="./index.php" class="btn btn-info" role="button">ATRÁS</a>

</body>
</html>