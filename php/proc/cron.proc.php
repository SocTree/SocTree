<?php 
$hoy = date('Y-m-d');
$sql = "UPDATE `tbl_events` SET `eve_estat` = 'finalitzat' WHERE `tbl_events`.`eve_data` = '".$hoy."';";
mysqli_query($conexion, $sql);

//da tokens
$sqlTokens = "SELECT * FROM tbl_events WHERE `tbl_events`.`eve_data` = '".$hoy."'";
$resultado=mysqli_query($conexion, $sqlTokens);
	if (mysqli_num_rows($resultado) != 0 ) {
		while ($usuario = mysqli_fetch_array($resultado)) {
			$usu_id = $usuario['usu_id'];
			$sqlDarTokens = "SELECT * FROM `tbl_moneder` WHERE `tbl_moneder`.`usu_id` = $usu_id";
			$resultadoDar=mysqli_query($conexion, $sqlDarTokens);
			if (mysqli_num_rows($resultadoDar) != 0 ) {
				while ($darTokens = mysqli_fetch_array($resultadoDar)) {
					$tokensActuales = $darTokens['mon_quantitat'];
				}
			}
					$tokensActuales = $tokensActuales + 5;
			$sqlDarTokens = "UPDATE `tbl_moneder` SET `mon_quantitat` = '$tokensActuales' WHERE `tbl_moneder`.`usu_id` = $usu_id;";
			mysqli_query($conexion, $sqlDarTokens);
		}
	}
 ?>