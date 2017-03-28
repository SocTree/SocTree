	<?php 
include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';
$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
		echo "<form id='form' method='post' enctype='multipart/form-data' onsubmit='return validarForm();'>";
			echo "<img src='../../../img/usuari/$usuari->usu_foto'/>";
			echo "<input type='file' name='usu_foto'/><br/>";
			echo "<input type='text' name='usu_nom' value='$usuari->usu_nom' /><br/>";
			echo "<input type='text' name='usu_cognom' value='$usuari->usu_cognom' /><br/>";
			echo "<input type='text' name='usu_email' value='$usuari->usu_email' /><br/>";
			echo "$usuari->usu_data_registre<br/>";
			echo "<button>Guardar Canvis</button>";
	echo "</form>";
	?>
	<a href='#' onclick='enviarDatos("usuario_perfil.php")'>Tornar</a>
<?php	
		}
?>

