<?php 
include '../../conexio/conexio.php';
include '../../includes/visualizarPermisivo.php';

extract($_REQUEST);

	//Consulta de todos los premios y sus respectivos patrocinadores
	$sql = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patr_id ORDER BY eco_preu_tokens ";
	if ($val==2){
		$sql .= " DESC";
	}

	$premios = mysqli_query($conexion, $sql);

	//Consulta para saber cuantos tokens tiene el usuario
	if (isset($usu)){
		$sql_moneder = "SELECT * FROM tbl_moneder WHERE usu_id ='$usu'";
		$tokens = mysqli_query($conexion, $sql_moneder);
	
	while ($token = mysqli_fetch_object($tokens)) {
	//Guardamos las monedas que tiene el usuario en la variable $monedes
						 $monedes = $token->mon_quantitat;
						}
	} else {
		echo "<p>$msgNoUsuarios</p>";
	}

	if (mysqli_num_rows($premios)>0){
		//Si existen premios hacemos la tabla
		while ($premio = mysqli_fetch_object($premios)) {
			echo "<div class='col-sm-4' style=' padding:1%; border: 1px #218221 dashed;  min-height: 350px; text-align:center'>";
			echo "<div class='col-sm-12'><p style='font-size:25px'>$premio->eco_nom_premi</p></div>";
			echo "<div class='col-sm-12'><img src='../../../img/patrocinadors/$premio->patr_logo' width='150'/></div>";
			echo "<div class='col-sm-12'>$premio->eco_preu_tokens <i class='fa fa-trophy'></i><br><br></div>";
			echo "<div class='col-sm-12' style='word-wrap:break-word; min-height: 100px'>$premio->eco_descripcio</div>";
			echo "<div class='col-sm-12'>";
				if (isset($usu)){
						echo "<form action='../../proc/ecopremis.proc.php'>";
						//Enviamos al proc un campo oculto del id del premio
						echo "<input type='hidden' name='premio' value='$premio->eco_id' />";
						$boton = "<button ";
					//Si el usuario no tiene suficientes tokens el boton para adquirir se deshabilita
						if ($monedes < $premio->eco_preu_tokens){
							 	$boton .= "disabled style='bottom: 1px;background-color: #F78181; border:2px red solid; border-radius: 5px'";
							 } else {
							 	$boton .= "style='bottom: 1px; background-color: #33cc33; border:2px green solid; border-radius: 5px'";
							 }
						echo $boton.">Adquirir</button>";
						//echo "</form>";
					} else {
						echo "<button style='bottom: 1px; background-color: #F78181; border:2px red solid; border-radius: 5px'>Adquirir</button>";
					}
				echo "</div>";
			echo "</div>";
		}
	} else {
		echo "Ara mateix no hi ha premis, torna més tard";
	}
?>