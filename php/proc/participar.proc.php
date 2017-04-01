<?php
ob_start();
if (file_exists('../includes/visualizarPermisivo.php')) {//esto nos dejará el id del usuario en la variable $usu
					include_once '../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
	 ?>
<?php 
	//este lo he agregado porque sino me daba error
	include '../conexio/conexio.php';

	//recogemos el id del evento
	$eve_id = $_GET['eve_id'];

	//comprobar que no tenga ningun otro evento
	// SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
	// $sqlComprobar = "SELECT * FROM `tbl_participants` RIGHT JOIN `tbl_events` ON `tbl_participants`.`eve_id` = `tbl_events`.`eve_id` WHERE `tbl_participants`.`usu_id` = $usu OR `tbl_events`.`eve_estat` = 'actiu'";
	$sqlComprobar = "SELECT * FROM `tbl_participants` WHERE `tbl_participants`.`usu_id` = $usu OR `tbl_events`.`eve_estat` = 'actiu'";


	// Porfa podemos revisar que no se haya ya inscrito en la misma actividad? no funciona el ¢sqlComprobar

	$sql = "INSERT INTO `tbl_participants` (`eve_id`, `usu_id`) VALUES ($eve_id, $usu);";
	$participar = mysqli_query($conexion, $sql);

	//esto podría llevar a mis eventos.

	header('location:../main/body/evento_participo.php');


  	

  	//echo "T'has apuntat correctament. <a href='../main/body/eventos.php'>Tornar a la pàgina d'events</a>.";
?>
<?php
ob_end_flush();
?>
