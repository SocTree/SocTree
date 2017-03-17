<?php session_start();
extract($_REQUEST); //Recibimos $email i $password

include('./conexion/conexion.php');

//Encriptamos la password con hash sha512
$password = hash('sha512',$password);

$sql = "SELECT * FROM tbl_usuari WHERE usu_email = $email AND usu_password = $password;";

$resultado=mysqli_query($conexion, $sql);
	if (mysqli_num_rows($resultado) != 0 ) {
		while ($usuario = mysqli_fetch_array($resultado)) {
			$usu_email = $usuario['usu_email'];
			$usu_password = $usuario['usu_password'];
			if ($email == $usu_email && $password == $usu_password) {
				$_SESSION['usu_id'] = $usuario['usu_id'];
				header('Location:../../index.php');
			}
		}
	}
	
                       
?>