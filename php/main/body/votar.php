<?php session_start();
extract($_REQUEST);
$usu = $_SESSION['usu_id'];
// $eve_id
// $num
	
include '../../conexio/conexio.php';
	
	$sqlConsulta = "SELECT * FROM tbl_inter_event WHERE usu_id = $usu AND eve_id = $eve_id";
	$verLikes = mysqli_query($conexion,$sqlConsulta);
		if (mysqli_num_rows($verLikes)) {
			$sql = "UPDATE `tbl_inter_event` SET `inter_eve_magrada` = '$num' WHERE usu_id = $usu AND eve_id = $eve_id;";
		}else{
			$sql = "INSERT INTO `tbl_inter_event` (`inter_eve_id`, `eve_id`, `usu_id`, `inter_eve_magrada`) VALUES (NULL, '$eve_id', '$usu_id', '$num');";
		}
		mysqli_query($conexion,$sql);





 ?>