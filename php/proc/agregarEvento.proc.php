<?php
ob_start();
?>
<?php //session_start();
if (file_exists('../includes/visualizarPermisivo.php')) {
					include_once '../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}?>
<?php				
extract($_REQUEST);

// Con el extract recojemos las siguientes variables:
// 	$eve_name
// 	$eve_descripcio
// 	$eve_tipus
// 	$eve_data
// 	$eve_localitzacio
// 	$eve_estat
//  $eve_hour
//  $eve_minute
// 	$eve_min_part
// 	$eve_max_part

//recojemos una variable $usu_id contenedora del id del usuario de la sesion:
// $usu_id = $_SESSION['usu_id'];
$eve_estat = "actiu";
//usu_id temporal para pruebas:
$usu_id = $usu;
// $activar="http://soctree.esy.es/php/proc/activar?eve_name=$eve_name";
// $email = "titulo: ".$eve_name."<br>lloc: ".$eve_localitzacio."<br>fecha: ".$eve_data."<br>min: ".$eve_min_part."<br>max: ".$eve_max_part."<br>descripcio: ".$eve_descripcio."<br><br>activar: ".$activar;
include '../conexio/conexio.php';
$eve_data = $eve_data . " " . $eve_hour . ":" . $eve_minute . ":00";
$sql = "INSERT INTO `tbl_events` ( `eve_nom`, `eve_descripcio`, `eve_tipus`, `eve_data`, `eve_localitzacio`, `usu_id`, `eve_estat`, `eve_min_part`, `eve_max_part`) VALUES ('$eve_name', '$eve_descripcio', '$eve_tipus', '$eve_data', '$eve_localitzacio', $usu_id, '$eve_estat', $eve_min_part, $eve_max_part);";
 // echo "$sql <br>";


 // echo $eve_data . " " . $eve_hour . ":" . $eve_minute . ":00";
mysqli_query($conexion, $sql);

//enviar el email
// mail("soctree.joan23@gmail.com","nuevo evento",$email);

//De momento redirige al índice, pendiente de cambio.
header('Location:../main/body/eventos.php');
 ?>
 <?php
ob_end_flush();
?>