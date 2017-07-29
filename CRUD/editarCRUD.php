  <?php 

  include("conexion.php");

  if (!isset($_POST["bot_actualizar"])) {
//si no has pulsado bot_actualizar muestras los antiguos registros
    echo "ENTRANDO EN IF " ;

    $Id=$_GET["Id"];
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $edad=$_GET["edad"];
    $pokemon=$_GET["pokemon"];


  }else{
//si actualizamos entonces...
    echo "ENTRANDO EN ELSE" ;
    $Id=$_POST["Id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $pokemon=$_POST["pokemon"];

    $sql="UPDATE entrenador SET NOMBRE_ENTRENADOR=:pnombre, APELLIDO_ENTRENADOR=:papellido, EDAD_ENTRENADOR=:pedad, POKEMON_ENTRENADOR=:ppokemon WHERE ID_ENTRENADOR=:pid";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":pid"=>$Id, ":pnombre"=>$nombre, ":papellido"=>$apellido, ":pedad"=>$edad, ":ppokemon"=>$pokemon));

header("Location:index.php");


  }
  
  ?>