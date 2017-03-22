<?php

 	include("../conexio/conexio.php");
	$consulta = "SELECT * FROM `tbl_marcador`" ; 
	//echo $consulta;
	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());
	$ajax = '{"marcadores": [{';
	if(mysqli_num_rows($resultado)>0){
	while($fila = mysqli_fetch_array($resultado)){

		//{lat: 41.3495464, lng: 2.1076887}
		if (!$fila['marc_coordenadas'] == ""){

				//empezamos a quitar mierda de las coordenadas

				$lat = strstr($fila['marc_coordenadas'], ',' , true);			

				$lat = substr($lat, 1);
				echo $lat."<br>";

				$lng = strstr($fila['marc_coordenadas'], ',' , false );					
				$lng = substr($lng, 1);
				$lng = substr($lng, );
				echo $lng."<br>";
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
