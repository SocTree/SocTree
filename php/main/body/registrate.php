<!-- Lo pongo aquí ya lo hareis como si fuera ventana modal esto es para hacer el proc -->

<?php 
//IMPORTANTE!!!!!!!
//FUNCION PARA QUE NO PUEDA VER ESTA PARTE UN USUARIO ACTIVO
if (isset($_SESSION['usu_id'])) {
	header('Location:../../../index.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../../proc/registrate.proc.php">
	nom:
	<input type="text" name="usu_nom"><br>
	cognoms:
	<input type="text" name="usu_cognom"><br>
	correu:
	<input type="email" name="usu_email"><br>
	Contrasenya:
	<input type="password" name="usu_password"><br>
	Repetiu la contrasenya:
	<input type="password" name="usu_password2"><br>
	<input type="submit" name="enviar">

</form>
</body>
</html>