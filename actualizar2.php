<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Actualizar3.php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div align="center">
		
	<?php
	// Conexion con el Servidor MySQL
	$conexion = mysqli_connect('localhost','root','');

	// Selección de la Base de Datos gestion12
	mysqli_select_db($conexion,'gestion12');

	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];

	// Sólo para verificar que datos he recibido
	echo 'NOMBRE :'.$nombre.'<br>';
	echo 'LA CLAVE ES : '.$clave.'<br>';

	$sSQL="UPDATE usuario SET clave = '".$_POST['clave']."' WHERE nombre = '$nombre'";

	if(mysqli_query($conexion,$sSQL)){
		echo "<h1>Registro Actualizado</h1><br>";
	} else {
		echo "ERROR: No se ejecutó .$sSQL.".mysqli_error($conexion);
	}
	?>

	
	<a href="lectura.php">Visualizar todos los datos</a>
	</div>
		

</body>
</html>