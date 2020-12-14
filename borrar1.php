<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>borrar1.php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div align="center">
		<h1>Borrar un Registro</h1><br>

		<?php
		// Conexión con el servidor MySQL
		$conexion = mysqli_connect('localhost','root','');

		mysqli_select_db($conexion,'gestion12');

		echo '<FORM METHOD = "POST" ACTION = "borrar2.php">';

		$sSQL = "SELECT login FROM usuario ORDER BY login";

		$result = mysqli_query($conexion,$sSQL);

		?>
	</form>

	</div>
</body>
</html>