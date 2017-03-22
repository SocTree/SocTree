<?php 
include '../../conexio/conexio.php';
	$usu=1;

	$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
			echo "<img src='../../../img/usuari/$usuari->usu_foto'/><br/>";
			echo "<b>Nom:</b> $usuari->usu_nom <br/>";
			echo "<b>Cognoms:</b> $usuari->usu_cognom<br/>";
			echo "<b>Correu:</b> $usuari->usu_email<br/>";
			echo "<b>Data d'alta:</b> $usuari->usu_data_registre<br/>";
			?>
			<button onclick="enviarDatos('usuario_mod.php');">Modificar perfil</button>
			<button onclick="enviarDatos('usuario_pass.php');">Canviar contrasenya</button>
	<?php
		}
?>