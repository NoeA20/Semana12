<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lectura.php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><div align="center">Lectura de la Tabla</div></h1>
	<br>
	<?php
	// conexión al servidor MySQL
	$conexion = mysqli_connect('localhost','root','');

	// seleccionar la Base de Datos
	mysqli_select_db($conexion,'gestion12');

	//Ejecutamos las sentencia SQL
	$result = mysqli_query($conexion,"SELECT * FROM usuario");

	?>

	<table align="center">
		<tr>
			<th>Login</th>
			<th>Nombre</th>
			<th>Contraseña</th>
			<th>E-Mail</th>
		</tr>

		<?php
		// Mostramos los registros de la tabla
		while ($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo '<td>'.$row["login"].'</td>';
			echo '<td>'.$row["nombre"].'</td>';
			echo '<td>'.$row["clave"].'</td>';
			echo '<td>'.$row["mail"].'</td>';
			echo "</td>";
		}
		mysqli_free_result($result);
		?>

	</table>
	<div align="center">
		<a href="ingresar.php">Añadir un Nuevo Registro</a><br>
		<a href="actualizar1.php">Actualizar un Registro</a><br>
		<a href="borrar1.php">Borrar un Registro</a><br>
	</div>


</body>
</html>