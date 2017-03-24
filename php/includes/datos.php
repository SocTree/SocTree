<?php

 	include("../conexio/conexio.php");
 	
 	function getCoordinates($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=".$address;
    //echo $url;
    
    $response = file_get_contents($url);
    $json = json_decode($response,true);
	 if ($json['status'] == 'ZERO_RESULTS') {
	return array();
	}
    $lat = $json['results'][0]['geometry']['location']['lat'];
    $lng = $json['results'][0]['geometry']['location']['lng'];
 
    return array($lat, $lng);
}
$valor = $_GET['valor'];
	switch ($valor) {
		case 0:
			$consulta = "SELECT tbl_marcador.marc_nom_lloc, tbl_marcador.marc_descripcio, tbl_marcador.marc_adreca, tbl_marcador.marc_coordenadas, tbl_marcador.usu_id, tbl_tipus_marcador.tip_marc_tipus, tbl_usuari.usu_nom, tbl_usuari.usu_cognom  FROM `tbl_marcador`, tbl_icona_marcador, tbl_tipus_marcador, tbl_usuari WHERE tbl_marcador.ico_id = tbl_icona_marcador.ico_id AND tbl_usuari.usu_id = tbl_marcador.usu_id" ;
			break;
		default:
			$consulta = " SELECT tbl_marcador.marc_nom_lloc, tbl_marcador.marc_descripcio, tbl_marcador.marc_adreca, tbl_marcador.marc_coordenadas, tbl_marcador.usu_id, tbl_tipus_marcador.tip_marc_tipus, tbl_usuari.usu_nom, tbl_usuari.usu_cognom FROM `tbl_marcador`, tbl_icona_marcador,  tbl_tipus_marcador, tbl_usuari WHERE tbl_marcador.ico_id = tbl_icona_marcador.ico_id AND tbl_usuari.usu_id = tbl_marcador.usu_id AND tbl_marcador.ico_id = ".$valor;
			break;
	}
	

 
	//echo $consulta;


	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());
	$ajax = '{"marcadores": [  ';
	echo $ajax;
	$cont = 0;
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
				if($cont == 0){
					echo '{"posicion": {';
				}else{
					echo ',{"posicion": {';
				}
				
				echo $lat.",";
				echo $lng." },";
				echo '"nombre": "'.$fila['marc_nom_lloc'].'",';
				echo '"tipo": "'.$fila['tip_marc_tipus'].'",';
				echo '"descripcion": "'.$fila['marc_descripcio'].'",';
				echo '"usuario": "'.$fila['usu_nom'].'"';
				echo '}';
				$cont++;
		}else{

			$coords = getCoordinates($fila['marc_adreca']);

			$lat = $coords[0];
			$lng = $coords[1];
			if($cont == 0){
					echo '{"posicion": {';
				}else{
					echo ',{"posicion": {';
				}
				echo '"lat": '.$lat.",";
				echo ' "lng": '.$lng." },";
				echo '"nombre": "'.$fila['marc_nom_lloc'].'",';
				echo '"tipo": "'.$fila['tip_marc_tipus'].'",';
				echo '"descripcion": "'.$fila['marc_descripcio'].'",';
				echo '"usuario": "'.$fila['usu_nom'].'"';
				echo '}';
				$cont++;
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
echo']}';
?>
