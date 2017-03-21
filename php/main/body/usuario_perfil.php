<?php 
include '../../conexio/conexio.php';
	$usu=1;

	$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
			echo "<img src='../../../img/$usuari->usu_foto'/><br/>";
			echo "$usuari->usu_nom <br/>";
			echo "$usuari->usu_cognom<br/>";
			echo "$usuari->usu_email<br/>";
			echo "$usuari->usu_data_registre<br/>";
			?>
			<button onclick="enviarDatos('usuario_mod.php');">Modificar perfil</button>
	<?php
		}
?>