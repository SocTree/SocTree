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
	header('Location:../../index.php');


}

 ?>

 
