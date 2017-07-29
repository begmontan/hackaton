<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

</head>

<style type="text/css">
  .button{
    background: url(https://cdn3.iconfinder.com/data/icons/social-messaging-ui-color-line/254000/82-128.png) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;

  }

  .button:hover{
    background: url(https://cdn0.iconfinder.com/data/icons/basic-ui-flat-circle/614/14_-_Trash-128.png) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;

  }

  .update{
    background: url(https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/refresh-circle-blue-128.png) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;
 }

  .update:hover{
    background: url(http://www.vital-c.com/assets/img/loading.gif) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;
 }

 .insert{
    background: url(http://a.dryicons.com/images/icon_sets/simplistica/png/128x128/add.png) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;

  }

  .insert:hover{
    background: url(http://findicons.com/files/icons/1014/ivista/128/good_or_tick.png) no-repeat;
    background-size: 50%;
    cursor:pointer;
    border: none;
    outline: none;

  }
</style>

<body style=" background-color:#34B2B1;">

  <?php 
  include("conexion.php");

  // $conexion=$base->query("SELECT * FROM entrenador");
  // $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
  $registros=$base->query("SELECT * FROM entrenador")->fetchAll(PDO::FETCH_OBJ);

  if(isset($_POST["cr"])) {

    $Id=$_POST["Id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $pokemon=$_POST["pokemon"];

    $sql="INSERT INTO entrenador (NOMBRE_ENTRENADOR, APELLIDO_ENTRENADOR, EDAD_ENTRENADOR, POKEMON_ENTRENADOR) VALUES (:nombre, :apellido, :edad, :pokemon)";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":edad"=>$edad, ":pokemon"=>$pokemon));

    echo $pokemon;
    echo("<script> location.replace('index.php'); </script>");
    // header("Location:index.php");

  }


  ?>

  <div><img style="margin-left:240px"  width= 50% src="http://www.pngall.com/wp-content/uploads/2016/06/Pokemon-PNG-Pic.png"/></div>


  <form autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <table width="70%" border="0" align="center">
      <tr >
        <td width="5%" style="background-color:#9AAEAC;" class="primera_fila">Nº</td>
        <td width="10%" style="background-color:#9AAEAC;" class="primera_fila">Nombre</td>
        <td width="10%" style="background-color:#9AAEAC;" class="primera_fila">Apellido</td>
        <td width="5%" style="background-color:#9AAEAC;" class="primera_fila">Edad</td>
        <td width="10%" style="background-color:#9AAEAC;" class="primera_fila">Pokemon</td>
        <td width="12%"  style="background-color:#9AAEAC;" class="primera_fila">___</td>
        <td width="10%" style="background-color:#9AAEAC;" class="primera_fila">ATAQUE</td>



        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr> 

      <!-- bucle for empieza en esta etiqueta incluyendo el codigo de abajo en html -->
      <?php 
      $contador=0;
      foreach ($registros as $entrenador):
        $contador++;
      ?>


      <tr>
        <td> <?php echo "<b>" . $contador ?> </td>
        <td><?php echo $entrenador->NOMBRE_ENTRENADOR ?></td>
        <td><?php echo $entrenador->APELLIDO_ENTRENADOR ?></td>
        <td><?php echo $entrenador->EDAD_ENTRENADOR ?></td>
        <td><?php echo $entrenador->POKEMON_ENTRENADOR ?></td>





        <td><?php echo '<img src="http://www.pkparaiso.com/imagenes/xy/sprites/animados/' . strtolower($entrenador->POKEMON_ENTRENADOR) . '.gif" onmouseover="this.src=\'https://www.pkparaiso.com/imagenes/xy/sprites/animados-espalda/' . strtolower($entrenador->POKEMON_ENTRENADOR) . '.gif\'" onmouseout="this.src=\'http://www.pkparaiso.com/imagenes/xy/sprites/animados/' . strtolower($entrenador->POKEMON_ENTRENADOR) . '.gif\'" onerror="this.src = \'https://mrbubblewand.files.wordpress.com/2010/04/light_003.gif?w=640\'">'?> </td>

        <td> <?php $filename = 'http://www.pkparaiso.com/imagenes/xy/sprites/animados/' . strtolower($entrenador->POKEMON_ENTRENADOR) . '-2.gif';
          if (file_get_contents($filename)) { 
            echo "<img src='".$filename."'>";
          } else {
            echo "<img src='https://mrbubblewand.files.wordpress.com/2010/04/light_003.gif?w=640'>";
          } ?> </td> 



          <td class="bot"> 
           <br>
           <br>

           <a href="borrarCRUD.php?Id=<?php echo $entrenador->ID_ENTRENADOR ?>">
             <input style="width: 50%; height: 40px" class="button" type='button' name='del' id='del' >
           </a>

           <a href="editar.php?Id=<?php echo $entrenador->ID_ENTRENADOR ?> & nombre=<?php echo $entrenador->NOMBRE_ENTRENADOR ?> & apellido=<?php echo $entrenador->APELLIDO_ENTRENADOR ?> & edad=<?php echo $entrenador->EDAD_ENTRENADOR ?> & pokemon=<?php echo $entrenador->POKEMON_ENTRENADOR ?> "> <input style="width: 50%; height: 40px" class="update" type='button' name='up' id='up'></a>


         </td>



         <?php 

         endforeach;


         ?>
         <!-- bucle for termina aqui repitiendo el html de dentro -->


         <tr>
           <td></td>
           <td><input type='text' name='nombre' size='10' class='centrado'></td>
           <td><input type='text' name='apellido' size='10' class='centrado'></td>
           <td><input type='text' name='edad' size='10' class='centrado'></td>

           <td>
           <?php //class="selectpicker" ?>
           <select type='text' name='pokemon' size='1' class='centrado' data-style="btn btn-primary">
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
            <option>Wigglytuff </option>
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
          </select></td>



          <td class='bot'>
          <br>
          &nbsp;
          <input style="width: 50%; height: 40px"  class="insert" type='submit' name='cr' id='cr' value=""></td></tr>    
        </table>
      </form>
      <p>&nbsp;</p>
    </body>
    </html>