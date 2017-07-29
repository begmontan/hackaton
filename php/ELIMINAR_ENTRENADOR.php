<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INSERTAR ENTRENADOR</title>

	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>


</head>
</head>
<body style="background-color: #1064AC">
	<form autocomplete="off" method="get"  align="center" action="ELIMINAR_REGISTRO.php">
		<legend>INSERTAR NUEVO ENTRENADOR</legend>

		<div align="center" class="form-group" >
			<div  style=" width: 900px;  height: 230px ; background-color: #5CACAC ; border: 2px solid ; border-radius: 25px;">

				<label for="nombre_entrenador">NOMBRE_ENTRENADOR</label>
				<input  style="width:500px ; text-align: center"  name="nombre_entrenador" type="text" class="form-control" id="nombre_entrenador" placeholder="INSERTE UN NOMBRE">
				<br>
				<label for="apellido_entrenador">APELLIDO_ENTRENADOR</label>
				<input style="width:500px ; text-align: center"  name="apellido_entrenador" type="text" class="form-control" id="apellido_entrenador" placeholder="INSERTE UN APELLIDO">
				<br>

				<img  width="50px" src="https://userscontent2.emaze.com/images/146a5274-b37d-4467-9acd-178a698fdd1e/91b12e69-1ef0-45ad-b171-9d7f27c7b40c.gif"/>

			</div>
		</div>



		<button type="submit" class="btn btn-primary">BORRAR INFORMACIÓN DE ENTRENADOR</button>
		<button type="reset" class="btn btn-primary">BORRAR INFORMACIÓN AÑADIDA</button>

	</form>
	<a href="./index.php" class="btn btn-info" role="button">ATRÁS</a>
</body>
</html>