	<?php 
include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';
$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
		echo "<form id='form' action='../../proc/usuario_mod.proc.php' method='post' enctype='multipart/form-data' onsubmit='return validarForm();'>";
	echo "<div class='col-sm-5'>";
			echo "<img src='../../../img/usuari/$usuari->usu_foto' class='img-thumbnail' width='250'/>";

	echo "</div>";
	echo "<div class='col-sm-7'>";
		echo "<div class='form-group'>";
			echo "<label for='usu_foto'>Foto de perfil</label>";
			echo "<input type='file' id='usu_foto' name='usu_foto'/>";
		echo "</div>";
		echo "<div class='form-group'>";
			echo "<label for='usu_nom'>Nom</label>";
			echo "<input type='text' id='usu_nom' class='form-control' name='usu_nom' value='$usuari->usu_nom' />";
		echo "</div>";
		echo "<div class='form-group'>";
			echo "<label for='usu_cognom'>Cognom</label>";
			echo "<input type='text' id='usu_cognom' class='form-control' name='usu_cognom' value='$usuari->usu_cognom' />";
		echo "</div>";
		echo "<div class='form-group'>";
			echo "<label for='usu_email'>Correu</label>";
			echo "<input type='text' id='usu_email' class='form-control' name='usu_email' value='$usuari->usu_email' />";
		echo "</div>";
			echo "<button class='btn btn-success'>Guardar Canvis</button>";
	echo "</div>";
	echo "</form>";
	?>
	<a href='#' onclick='enviarDatos("usuario_perfil.php")' class='btn btn-default' style="float: right;">Tornar</a>
<?php	
		}
?>

