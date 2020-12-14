<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>actualizar.php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div align="center">
		<h1>Actualizar un Registro</h1>
		<br>
	<?php
	// Conexion al Servidor MySQL
	$conexion = mysqli_connect('localhost','root','');

	// Seleccion de la Base de Datos
	mysqli_select_db($conexion,'gestion12');

	echo '<FORM METHOD = "POST" ACTION = "actualizar2.php"> Nombre<br>';

	// Creamos la sentencia SQL y la ejecutamos
	$sSQL="SELECT nombre FROM usuario ORDER BY nombre";

	$result = mysqli_query($conexion,$sSQL);
	
	echo '<select name="nombre">';

	// Generamos un menu desplegable
	while ($row=mysqli_fetch_array($result)) {
		echo '<option>'.$row["nombre"];
	}
	?>
</select>
<br><br>
Nueva CLAVE <br>
<input type="text" name="clave"><br>
<input type="submit" value="Actualizar">
		
	

</body>
</html>