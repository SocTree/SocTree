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
			
		}
	}



 ?>