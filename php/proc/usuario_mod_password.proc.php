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
    $usu_password = hash('sha512', $usu_password);

	$sql_pass = "SELECT * FROM tbl_usuari WHERE usu_id='$usu' AND usu_password='$usu_password'";
	$passwords = mysqli_query($conexion, $sql_pass);

	if(mysqli_num_rows($passwords)>0){
		$usu_nova_pass = hash('sha512', $usu_nova_pass);
		$sql_update = "UPDATE tbl_usuari SET usu_password = '$usu_nova_pass' WHERE usu_id = '$usu' ";
		mysqli_query($conexion, $sql_update);
		header('location:../main/body/perfil.php?corr=1');
	}else{
		header('location:../main/body/perfil.php?err=2');
	}

?>
<?php
ob_end_flush();
?>