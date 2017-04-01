<?php
ob_start();
if (file_exists('../includes/visualizarPermisivo.php')) {
					include_once '../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
?>
<?php 
include '../conexio/conexio.php';



extract($_REQUEST);

echo "$noFoto";
	
$sql_correo = "SELECT * FROM tbl_usuari WHERE usu_email='$usu_email' AND usu_id != '$usu' ";

$email = mysqli_query($conexion, $sql_correo);

if (mysqli_num_rows($email)>0){
	header('location:../main/body/perfil.php?err=1');
} else {

$sql_update = "UPDATE tbl_usuari SET usu_nom = '$usu_nom', usu_cognom='$usu_cognom', usu_email='$usu_email'";

	if (isset($_FILES['usu_foto'])){
		$fichero = $_FILES['usu_foto']['name'];
						if ($fichero!=""){
						
						$ext = strstr($fichero, '.'); 
						$fichero = $usu.$ext; 

					move_uploaded_file($_FILES['usu_foto']['tmp_name'], "../../img/usuari/".$fichero);

	$sql_update .= ", usu_foto='$fichero' ";

	} else {
		if ($noFoto != ""){
			$sql_update .= ", usu_foto='$noFoto' ";
		}
	}
} 

	$sql_update .= " WHERE usu_id='$usu'";

	echo "$sql_update";

	mysqli_query($conexion, $sql_update);

	header('location:../main/body/perfil.php');
	
}
?>
<?php
ob_end_flush();
?>