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
	<form autocomplete="off" method="get"  align="center" action="INSERTAR_REGISTRO.php">
		<legend>INSERTAR NUEVO ENTRENADOR</legend>

		<div align="center" class="form-group" >
			<div  style=" width: 900px;  height: 330px ; background-color: #5CACAC ; border: 2px solid ; border-radius: 25px;">

				<label for="nombre_entrenador">NOMBRE_ENTRENADOR</label>
				<input  style="width:500px ; text-align: center"  name="nombre_entrenador" type="text" class="form-control" id="nombre_entrenador" placeholder="INSERTE UN NOMBRE">
				<br>
				<label for="apellido_entrenador">APELLIDO_ENTRENADOR</label>
				<input style="width:500px ; text-align: center"  name="apellido_entrenador" type="text" class="form-control" id="apellido_entrenador" placeholder="INSERTE UN APELLIDO">
				<br>
				<label for="edad_entrenador">EDAD_ENTRENADOR</label>
				<input style="width:500px ; text-align: center" name="edad_entrenador" type="text" class="form-control" id="edad_entrenador" placeholder="INSERTE UNA EDAD">
				<br>
				<label for="pokemon_entrenador">POKEMON_ENTRENADOR</label>
				<br>
				<select class="selectpicker" data-style="btn-primary" name="pokemon_entrenador" id="pokemon_entrenador" type="text" >
					<option>Bulbasaur </option>
					<option>Ivysaur </option>
					<option>Venusaur </option>
					<option>Charmander </option>
					<option>Charmeleon </option>
					<option>Charizard </option>
					<option>Squirtle </option>
					<option>Wartotle </option>
					<option>Blastoise </option>
					<option>Caterpie </option>
					<option>Metapod </option>
					<option>Buterfree </option>
					<option>Weedle </option>
					<option>Kakuna </option>
					<option>Beedrill </option>
					<option>Pidgey </option>
					<option>Pidgeotto </option>
					<option>Pidgeot </option>
					<option>Rattata </option>
					<option>Raticate </option>
					<option>Spearow </option>
					<option>Fearow </option>
					<option>Ekans </option>
					<option>Arbok </option>
					<option>Pikachu </option>
					<option>Raichu </option>
					<option>Sandshrew </option>
					<option>Sandslash </option>
					<option>Nidoran♀ </option>
					<option>Nidorina </option>
					<option>Nidoqueen </option>
					<option>Nidoran♂ </option>
					<option>Nidorino </option>
					<option>Nidoking </option>
					<option>Clefairy </option>
					<option>Clefable </option>
					<option>Vulpix </option>
					<option>Ninetales </option>
					<option>Jigglypuff </option>
					<option>Wigglypuff </option>
					<option>Zubat </option>
					<option>Golbat  </option>
					<option>oddish </option>
					<option>Gloom </option>
					<option>Vileplume </option>
					<option>Paras </option>
					<option>Parasect </option>
					<option>Venonat </option>
					<option>Venomoth </option>
					<option>Diglett </option>
					<option>Dugtrio </option>
					<option>Meowth </option>
					<option>Persian </option>
					<option>Psyduck </option>
					<option>Golduck </option>
					<option>Mankey </option>
					<option>Primeape </option>
					<option>Growlithe </option>
					<option>Arcanine </option>
					<option>Poliwag </option>
					<option>Poliwhirl </option>
					<option>Poliwrath </option>
					<option>Abra </option>
					<option>Kadabra </option>
					<option>Alakazam </option>
					<option>Machop </option>
					<option>Machocke </option>
					<option>Machamp </option>
					<option>Bellsprout </option>
					<option>Weepinbell </option>
					<option>Victrebell </option>
					<option>Tentacool </option>
					<option>entacruel </option>
					<option>Geodude </option>
					<option>Graveler </option>
					<option>Golem </option>
					<option>Ponyta </option>
					<option>Rapidash </option>
					<option>Slowpoke </option>
					<option>Slowbro </option>
					<option>Magnemite </option>
					<option>Magneton </option>
					<option>Farfetch'd </option>
					<option>Doduo </option>
					<option>Dodrio </option>
					<option>Seel </option>
					<option>Dewgong </option>
					<option>Grimer </option>
					<option>Muk </option>
					<option>Shellder </option>
					<option>Cloyster </option>
					<option>Gastly </option>
					<option>Haunter </option>
					<option>Gengar </option>
					<option>Onix </option>
					<option>Drowzee </option>
					<option>Hypno </option>
					<option>Krabby </option>
					<option>Kingler </option>
					<option>Voltorb </option>
					<option>Electrode </option>
					<option>Exeggcute </option>
				</select>
				<img  width="50px" src="https://userscontent2.emaze.com/images/146a5274-b37d-4467-9acd-178a698fdd1e/91b12e69-1ef0-45ad-b171-9d7f27c7b40c.gif"/>

			</div>
		</div>



		<button type="submit" class="btn btn-primary">REGISTRAR INFORMACIÓN DE ENTRENADOR</button>
		<button type="reset" class="btn btn-primary">BORRAR INFORMACIÓN AÑADIDA</button>

	</form>

	<a href="./index.php" class="btn btn-info" role="button">ATRÁS</a>
</body>
</html>