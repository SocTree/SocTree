<?php session_start();
extract($_REQUEST); //Recibimos $email i $password

include('../conexio/conexio.php');

//Encriptamos la password con hash sha512
$password = hash('sha512',$password);

$sql = "SELECT * FROM tbl_usuari WHERE usu_email = '$email' AND usu_password = '$password';";

$resultado=mysqli_query($conexion, $sql);
				echo "foisndfuignfdiuog";
	if (mysqli_num_rows($resultado) != 0 ) {
		while ($usuario = mysqli_fetch_array($resultado)) {
			$usu_email = $usuario['usu_email'];
			$usu_password = $usuario['usu_password'];
			if ($email == $usu_email && $password == $usu_password) {
				$_SESSION['usu_id'] = $usuario['usu_id'];
				$_SESSION['usu_nom'] = $usuario['usu_nom'];
				$_SESSION['usu_cognom'] = $usuario['usu_cognom'];
				echo $_SESSION['usu_id'];
					echo $_SESSION['usu_nom'];
						echo $_SESSION['usu_cognom'];
				header('Location:../../index.php');
			}else{echo "error";}
		}
	}
	
                       
?>