<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insertar.php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$conexion = mysqli_connect('localhost','root','');

	mysqli_select_db($conexion,"gestion12");

	$login = $_POST['login'];
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];
	$mail = $_POST['mail'];

	$sql = "INSERT INTO usuario (login,nombre,clave,mail) VALUES ('$login','$nombre','$clave','$mail')";

	mysqli_query($conexion,$sql);

	?>
	<h1><div align="center">
		Registro Insertado
	</div></h1>
	<div align="center">
		<a href="lectura.php">Visualizar el contenido de la tabla</a>
	</div>


</body>
</html>