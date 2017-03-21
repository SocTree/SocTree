<?php 

	include '../includes/visualizarPermisivo.php'; //esto nos dejará el id del usuario en la variable $usu
	//recogemos el id del evento
	$eve_id = $_GET['eve_id'];
	$sql = "INSERT INTO `tbl_participants` (`part_id`, `eve_id`, `usu_id`) VALUES (NULL, '1', '1');";
	$participar=mysqli_query($conexion, $sql);

	//esto podría llevar a mis eventos.
	header('location:../../index.php');



?>