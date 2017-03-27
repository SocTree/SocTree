<?php
include("../../conexio/conexio.php");

	$consulta = "SELECT * FROM `tbl_tipus_marcador` " ; 
	echo $consulta;
	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

	if(mysqli_num_rows($resultado)>0){

	while($fila = mysqli_fetch_array($resultado)){

		echo "<optgroup label='".$fila['tip_marc_tipus']."'>";

		$sql = "SELECT * FROM `tbl_icona_marcador` where tip_marc_id =".$fila['tip_marc_id']." order by ico_id " ; 
		echo $sql;

		$res = mysqli_query($conexion, $sql) or die (mysqli_error());

		if(mysqli_num_rows($res)>0){

		while($marc = mysqli_fetch_array($res)){

			echo "<option value=".$marc['ico_id'].">". strstr($marc['ico_nom'], '.' , true)."  </option>";

		}
		
		}
	}
}
	mysqli_close($conexion);
?>