<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
</head>

<body style=" background-color:#34B2B1;">

  <h1>ACTUALIZAR</h1>

  <?php 

  include("conexion.php");

  if (!isset($_POST["bot_actualizar"])) {

//si no has pulsado bot_actualizar muestras los antiguos registros
    echo("HOLA SOY EL IF ");

    $Id=$_GET["Id"];
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $edad=$_GET["edad"];
    $pokemon=$_GET["pokemon"];

  }else{

//si actualizamos entonces...
    echo("HOLA SOY EL ELSE ");
    $Id=$_POST["Id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $pokemon=$_POST["pokemon"];

    $sql="UPDATE entrenador SET NOMBRE_ENTRENADOR=:pnombre, APELLIDO_ENTRENADOR=:papellido, EDAD_ENTRENADOR=:pedad, POKEMON_ENTRENADOR=:ppokemon WHERE ID_ENTRENADOR=:pid";
    echo $sql;
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":pid"=>$Id, ":pnombre"=>$nombre, ":papellido"=>$apellido, ":pedad"=>$edad, ":ppokemon"=>$pokemon));

    echo("<script> location.replace('index.php'); </script>");

  }

  ?>


  <p>

  </p>
  <p>&nbsp;</p>
  <form autocomplete="off" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="0" align="center">

      <tr>
        
       <label for="Id"></label>
       <input style="border: none " type="hidden" name="Id" id="Id" value="<?php echo $Id ?>"> 
     </tr>

     <tr>
      <td style="background-color: #84A09C">Nombre</td>
      <td style="background-color: white"><label  for="nombre"></label>
        <input style="text-align: center ; width: 262px; border: none " type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"> </td>
      </tr>

      <tr>
        <td style="background-color: #84A09C">Apellido</td>
        <td style="background-color: white"><label  for="apellido"></label>
          <input style="text-align: center ; width: 262px; border: none " type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>"> </td>
        </tr>


        <tr>
         <td style="background-color: #84A09C">Edad</td>
         <td style="background-color: white"><label  for="edad"></label>
          <input style="text-align: center ; width: 262px; border: none " type="text" name="edad" id="edad" value="<?php echo $edad ?>"> </td>
        </tr>


        <tr>
          <td style="background-color: #84A09C">Pokemon</td>
          <td style="background-color: white"><label  for="pokemon"></label>
            <input style="text-align: center ; width: 262px; border: none " type="text" name="pokemon" id="pokemon" value="<?php echo $pokemon ?>"> </td>
          </tr>


          <tr>
            <td colspan="2"><input  class="btn btn-primary" type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
          </tr>

        </table>
      </form>
      <p>&nbsp;</p>
    </body>
    </html>