<?php
include("../conexio/conexio.php");

extract($_REQUEST);

//recibimos del formulario el id del tipo de punto de interes,
//el nombre del punto,
//la descripcion del punto de interes
//la direccion
//y en oculto, el id del usuario que crea este punto de interes

echo $usu_id;

//si $marc_adreça = "" significa que han usado la geolocalización por lo tanto en la consulta tendremos que indicar las coordenadas en lugar de la direccion

//ej{lat: 41.3495464, lng: 2.1076887}

$marc_coordenadas = "{".$latitud.", ".$longitud."}";

//echo $marc_coordenadas;


if ($marc_adreca == ""){
	$consulta = "INSERT INTO `tbl_marcador` (`marc_nom_lloc`, `marc_descripcio`, `marc_coordenadas`,`ico_id`, `usu_id`) VALUES (  '$marc_nom_lloc', '$marc_descripcio', '$marc_coordenadas', '$ico_id', $usu_id)" ; 
}else{

	$marc_adreca = addslashes ($marc_adreca);	
$marc_descripcio = addslashes($marc_descripcio);
$marc_nom_lloc = addslashes($marc_nom_lloc);

	$consulta = "INSERT INTO `tbl_marcador` ( `marc_nom_lloc`, `marc_descripcio`, `marc_adreca`, `ico_id`, `usu_id`) VALUES ( '$marc_nom_lloc', '$marc_descripcio', '$marc_adreca ', '$ico_id' , $usu_id)" ; 
	
} 


	echo $consulta;




	$anadir = mysqli_query($conexion,$consulta);

	mysqli_close($conexion);
	header('location: ../main/body/visualizarPuntosInteres.php ');
?>