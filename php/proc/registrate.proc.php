<?php
ob_start();
if (file_exists('../../includes/visualizarPermisivo.php')) {
					include_once '../../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
?>
<?php
extract($_REQUEST);
/*Esto recoje:
usu_nom
usu_cognom
usu_email
usu_password
usu_password2
*/
if ($usu_password != $usu_password2) {
	header('Location:../main/body/registrate.php');
}else{
	$usu_password = hash('sha512',$usu_password);
	$usu_data_registre = date('Y-m-d');
	$usu_tipus = "normal";
	include('../conexio/conexio.php');

	$sql = "INSERT INTO `tbl_usuari` (`usu_nom`, `usu_cognom`, `usu_email`, `usu_password`, `usu_tipus`, `usu_foto`, `usu_data_registre`) VALUES ('$usu_nom', '$usu_cognom', '$usu_email', '$usu_password', '$usu_tipus', '', '$usu_data_registre');";
	// echo $sql;
	$resultado=mysqli_query($conexion, $sql);

	$id = mysqli_insert_id($conexion);

	$moneder = "INSERT INTO tbl_moneder (usu_id, mon_quantitat) VALUES ('$id', '0')";
	mysqli_query($conexion, $moneder);

	header('Location:../../index.php');


}
 ?>
<?php
ob_end_flush();
?>
 
