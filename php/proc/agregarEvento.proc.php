<?php //session_start();
include '../includes/visualizarPermisivo.php';
extract($_REQUEST);

// Con el extract recojemos las siguientes variables:
// 	$eve_name
// 	$eve_descripcio
// 	$eve_tipus
// 	$eve_data
// 	$eve_localitzacio
// 	$eve_estat
// 	$eve_min_part
// 	$eve_max_part

//recojemos una variable $usu_id contenedora del id del usuario de la sesion:
// $usu_id = $_SESSION['usu_id'];
$eve_estat = "inactiu";
//usu_id temporal para pruebas:
$usu_id = $usu;

include '../conexio/conexio.php';
$sql = "INSERT INTO `tbl_events` (`eve_id`, `eve_nom`, `eve_descripcio`, `eve_tipus`, `eve_data`, `eve_localitzacio`, `usu_id`, `eve_estat`, `eve_min_part`, `eve_max_part`, `eve_actual_part`) VALUES (NULL, '$eve_name', '$eve_descripcio', '$eve_tipus', '$eve_data', '$eve_localitzacio', '$usu_id', '$eve_estat', '$eve_min_part', '$eve_max_part', NULL);";
 echo "$sql";
mysqli_query($conexion, $sql);

//De momento redirige al índice, pendiente de cambio.
header('Location:../main/body/eventos.php');



 ?>