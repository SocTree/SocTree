<?php 
include '../../conexio/conexio.php';
$usu = 1;

$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
		echo "<form action='../../proc/usuario_mod.proc.php' method='post' enctype='multipart/form-data'>";
			echo "<img src='../../../img/$usuari->usu_foto'/>";
			echo "<input type='file' name='usu_foto'/><br/>";
			echo "<input type='text name='usu_nom' value='$usuari->usu_nom' /><br/>";
			echo "<input type='text' name='usu_cognom' value='$usuari->usu_cognom' /><br/>";
			echo "<input type='text' name='usu_email' value='$usuari->usu_email' /><br/>";
			echo "$usuari->usu_data_registre<br/>";
			echo "<button>Guardar canvis</button>";
	echo "</form>";
		}
?>