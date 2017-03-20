<?php
include("/conexio/conexio.php");
$consulta = "SELECT * FROM `tbl_tipus_marcador`" ; 
	//echo $consulta;

	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

	if(mysqli_num_rows($resultado)>0){

	while($fila = mysqli_fetch_array($resultado)){

	echo "<option value=".$fila['tip_marc_id'].">".$fila['tip_marc_tipus']."</option>";

		
		}
	}
	mysqli_close($conexion);
?>