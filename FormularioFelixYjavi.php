<?php
$nombre1="";
$nombre2="";

if(isset($_POST['enviar'])){
  $nombre1 = $_POST['nombre1'];
  $nombre2 = $_POST['nombre2'];

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="FormularioFelixYjavi.php" method="post">

    Nombre 1<input type="text" name="nombre1" value="<?=$nombre1?>">
    <br>
    Nombre 2<input type="text" name="nombre2" value="<?=$nombre2?>">
    <br>
    <input type="submit" name="enviar" value="Enviar">
   </form>
  </body>
</html>
