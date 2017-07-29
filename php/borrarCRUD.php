<?php 

  include("conexion.php");

$Id=$_GET["Id"];
$base-> query("DELETE FROM entrenador WHERE ID_ENTRENADOR='$Id'");

header("Location:index.php");

 ?>