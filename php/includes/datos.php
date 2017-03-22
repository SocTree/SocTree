<?php

 	include("../conexio/conexio.php");
	$consulta = "SELECT tbl_marcador.marc_nom_lloc, tbl_marcador.marc_descripcio, tbl_marcador.marc_adreca, tbl_marcador.marc_coordenadas, tbl_marcador.usu_id, tbl_tipus_marcador.tip_marc_tipus, tbl_usuari.usu_nom, tbl_usuari.usu_cognom  FROM `tbl_marcador`, tbl_tipus_marcador, tbl_usuari WHERE tbl_tipus_marcador.tip_marc_id = tbl_marcador.tip_marc_id AND tbl_usuari.usu_id = tbl_marcador.usu_id" ; 
	//echo $consulta;
	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());
	$ajax = '{"marcadores": [{ <br> ';
	echo $ajax;
	if(mysqli_num_rows($resultado)>0){

	while($fila = mysqli_fetch_array($resultado)){

		//{lat: 41.3495464, lng: 2.1076887}
		if (!$fila['marc_coordenadas'] == ""){

				//empezamos a quitar mierda de las coordenadas

				$lat = strstr($fila['marc_coordenadas'], ',' , true);			

				$lat = substr($lat, 1);
				//echo $lat."<br>";

				$lng = strstr($fila['marc_coordenadas'], ',' , false );					
				$lng = substr($lng, 1);
				$lng = substr($lng,  0, -1 );
				//$lng = substr ($lng, 0, strlen($lng) - 1);
				//echo $lng."<br>";
				//echo "/////<br>";

				echo '"posicion": {<br>';
				echo $lat.",<br>";
				echo $lng."<br> },<br>";
				echo '"nombre": "'.$fila['marc_nom_lloc'].'",<br>';
				echo '"tipo": "'.$fila['tip_marc_tipus'].'",<br>';
				echo '"descripcion": "'.$fila['tip_marc_tipus'].'",<br>';
				echo '"usuario": "'.$fila['tip_marc_tipus'].'",<br>';
				//echo }]}<br>";
		}
		
		}
	}
	mysqli_close($conexion);

/*echo '{"marcadores": [{
		"posicion": {
			"lat": 41.3496641,
			"lng": 2.1075503
		},
		"foto": "face.png",
		"nombre": "Juan"
	}, {
		"posicion": {
			"lat": 41.3496641,
			"lng": 2.1078903
		},
		"foto": "face2.png",
		"nombre": "Paco"
	}, {
		"posicion": {
			"lat": 41.4098641,
			"lng": 2.1076503
		},
		"foto": "face3.png",
		"nombre": "Pedro"
	}]
}';
*/
?>
