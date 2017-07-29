<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POKEDEX</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	
	<?php 
	$db_host="localhost";
	$db_database="pokemon_php";
	$db_usuario="root";
	$db_password="root";

	$conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_database);
	$query1 = "SELECT  NOMBRE_ENTRENADOR , APELLIDO_ENTRENADOR  , EDAD_ENTRENADOR , POKEMON_ENTRENADOR FROM entrenador";
	
	$respuesta = mysqli_query($conexion,$query1);//guardamos la respuesta
	$color_fondo=2;
	$contador=1;
	while ( $fila = mysqli_fetch_row($respuesta)) {

		if ($color_fondo%2==0) {
			$back="#ADBBBA";
		}
		else{$back="#5CACAC";}
		echo '<div align="center" style="background-color:' . $back . '">';

		echo "<b style='color: white'>" . $contador . "<br></b>";

		echo "<b>" . $fila[0] . "<br> </b>";
		echo "<b>" . $fila[1] . "<br> </b>";
		echo "<b>" . $fila[2] . "<br> </b>";
		echo "--> " . "<b style='color: white'>" . strtoupper($fila[3]) . "</b> =>";
		echo '<img src="http://www.pkparaiso.com/imagenes/xy/sprites/animados/' . strtolower($fila[3]) . '.gif"/>';

		echo "<br> <br> </div>";

		$color_fondo++;
		$contador++;

	}



//CERRAR CONEXION
	mysqli_close($conexion);
	?>
	<div align="center">
		<a href="./ENTRENADOR_POKEDEX.php" class="btn btn-info" role="button">INSERTAR NUEVO ENTRENADOR</a>
		<a href="#" class="btn btn-info" role="button">MODIFICAR REGISTRO DE ENTRENADOR</a>
		<a href="./ELIMINAR_ENTRENADOR.php" class="btn btn-info" role="button">BORRAR REGISTRO DE ENTRENADOR</a>
	</div>

</body>
</html>
