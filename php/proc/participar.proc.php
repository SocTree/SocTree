<?php 

	include '../includes/visualizarPermisivo.php'; //esto nos dejará el id del usuario en la variable $usu
	//recogemos el id del evento
	$eve_id = $_GET['eve_id'];

	//comprobar que no tenga ningun otro evento
	// SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
	$sqlComprobar = "SELECT * FROM `tbl_participants` INNER JOIN `tbl_events` ON `tbl_participants`.`eve_id` = `tbl_events`.`eve_id` WHERE `tbl_participants`.`usu_id` = $usu AND `tbl_events`.`eve_estat` = 'actiu' AND `tbl_events`.`data`";




	$sql = "INSERT INTO `tbl_participants` (`part_id`, `eve_id`, `usu_id`) VALUES (NULL, '1', '1');";
	$participar=mysqli_query($conexion, $sql);

	//esto podría llevar a mis eventos.
	header('location:../../index.php');



?>