<?php

$nombre1 = "Rebeca";
$nombre2 = "Félix";
$nombre3 = "Javier";
$nombre4 = "Pablo";
$nombre5 = "Messi";
$nombre6 = "Modric";

if(isset($_POST['enviar'])){
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$nombre3 = $_POST['nombre3'];
	$nombre4 = $_POST['nombre4'];
	$nombre3 = $_POST['nombre5'];
	$nombre4 = $_POST['nombre6'];
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
		Nombre 3<input type="text" name="nombre3" value="<?=$nombre3?>">
		<br>

		<br>
		Nombre 4<input type="text" name="nombre4" value="<?=$nombre4?>">
		<br>
		<br>
		Nombre 5<input type="text" name="nombre4" value="<?=$nombre5?>">
		<br>
		<br>
		Nombre 6<input type="text" name="nombre4" value="<?=$nombre6?>">
		<br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>
