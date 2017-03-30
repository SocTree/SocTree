	<?php 
include '../../conexio/conexio.php';
include '../../includes/visualizarPermisivo.php';




extract($_REQUEST);



	$sql = "SELECT * FROM `tbl_events` WHERE eve_estat = 'actiu'";
	$sqlEsport = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'Esports' AND eve_estat = 'actiu'";
	$sqlGastronomic = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'gastronomic' AND eve_estat = 'actiu'";
	$sql3R = "SELECT * FROM `tbl_events` WHERE eve_tipus = '3R' AND eve_estat = 'actiu'";
	$sqlDiy = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'diy' AND eve_estat = 'actiu'";
	$sqlSolidari = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'solidari' AND eve_estat = 'actiu'";

	if (isset($val)) {	
	//decidiendo sql a usar:
	switch ($val) {
		case '0':
			$sql = $sql;
			break;
		case '1':
			$sql = $sqlEsport;
			break;
		case '2':
			$sql = $sqlGastronomic;
			break;
		case '3':
			$sql = $sql3R;
			break;
		case '4':
			$sql = $sqlDiy;
			break;
		case '5':
			$sql = $sqlSolidari;
			break;
		
		default:
			break;
	}
	}
	$eventos=mysqli_query($conexion, $sql);
    if (mysqli_num_rows($eventos) != 0){
      $contador3 = 0;
      while ($evento = mysqli_fetch_array($eventos)) {
        if ($contador3 == 3) {
			$contador3 = 0;
			echo "</div><br><div>";
		}
		$contador3++;
		$titol = $evento['eve_nom'];
		$descripcio = $evento['eve_descripcio'];
		$eve_id = $evento['eve_id'];
		$longDescr = strlen($descripcio);
		if ($longDescr > 250) {
			$descripcio=substr(strip_tags($descripcio), 0, 250);
			$descripcio .= "...";
		}

		
		// Con esta ventana modal sucede un casper... funciona... pero por ejemplo no refleja el texto del boton de cierre
		//y pone close, pero si quitamos la modal no funciona

		echo "<div class='eventos_class col-md-4'>
			
					<a href='verEvento.php?eve_id=$eve_id' data-toggle='modal' data-target='#myModal'><i style='font-size:20px;'>$titol</i></a><br>
					$descripcio 
			  </div>

			  	<div class='modal fade' id='myModal' role='dialog'>
    				<div class='modal-dialog'>
    
				      <!-- Modal content-->
				      <div class='modal-content'>
				        <div class='modal-header'>
				          <button type='button' class='close' data-dismiss='modal'>&times;</button>
				          <h4 class='modal-title'>Modal Header</h4>
				        </div>
				        <div class='modal-body'>
				          <p>Some text in the modal.</p>
				        </div>
				        <div class='modal-footer'>
				          <button type='button' class='btn btn-default' data-dismiss='modal'></button>
				        </div>
				      </div>
				      
				    </div>
				  </div>
		";
      }
    }else{
    	echo "No hi ha events d'aquest tipus disponibles.";
    }

?>