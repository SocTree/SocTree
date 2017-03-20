<?php
include("../conexio/conexio.php");

extract($_REQUEST);

//recibimos del formulario el id del tipo de punto de interes,
//el nombre del punto,
//la descripcion del punto de interes
//la direccion
//y en oculto, el id del usuario que crea este punto de interes


$consulta = "INSERT INTO `tbl_marcador` (`tip_marc_id`, `marc_nom_lloc`, `marc_descripcio`, `marc_foto`, `marc_adreca`, `usu_id`) VALUES ( $tip_marc_tipus , '$marc_nom_lloc', '$marc_descripcio', NULL, '$marc_adreca', $usu_id)" ; 
	
	echo $consulta;



	$anadir = mysqli_query($conexion,$sql);

	mysqli_close($conexion);
	header("../mapa_puntos_interes.php")
?>