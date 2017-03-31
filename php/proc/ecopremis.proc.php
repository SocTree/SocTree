<?php
ob_start();
if (file_exists('../includes/visualizarPermisivo.php')) {
					include_once '../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
?><?php
include '../conexio/conexio.php';


extract($_REQUEST);

//Consulta del premio adquirido
$sql_premi = "SELECT *  FROM tbl_ecochange WHERE eco_id = '$premio'";
$premis = mysqli_query($conexion, $sql_premi);

while ($premi = mysqli_fetch_object($premis)) {
	//Guardamos el coste del premio en la variable $tokens
	$tokens = $premi->eco_preu_tokens;
}

//Consulta de los tokens que tiene el usuario
$sql_usu = "SELECT * FROM tbl_moneder WHERE usu_id='$usu'";
$usuaris = mysqli_query($conexion, $sql_usu);

while ($usuari = mysqli_fetch_object($usuaris)) {
//Resta de los tokens del premio - los tokens que tiene el usauri
	if ($usuari->mon_quantitat<$tokens){
		header('location:../main/body/ecopremis.php');die;
	} else {
	$tot = $usuari->mon_quantitat - $tokens ;
	}
}

//Establecemos los tokens que tendra el usuario despues de la compra
$sql_update = "UPDATE tbl_moneder SET mon_quantitat = '$tot' WHERE usu_id='$usu'";
mysqli_query($conexion, $sql_update);
echo "$sql_update";
header('location:../main/body/contactePatrocinador.php?premi='.$premio);
?>
<?php
ob_end_flush();
?>