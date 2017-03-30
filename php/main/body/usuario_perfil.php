<?php 
include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';

	$sql_usuari = "SELECT * FROM tbl_usuari WHERE usu_id='$usu'";
	$usuaris=mysqli_query($conexion, $sql_usuari);
		
		while ($usuari = mysqli_fetch_object($usuaris)) {
		echo "<div class='col-sm-5'>";
			echo "<img src='../../../img/usuari/$usuari->usu_foto' class='img-thumbnail' width='250'/><br/>";
		echo "</div>";
		echo "<div class='col-sm-7'>";
			echo "<div class='form-group'>";
				echo "<label class='col-sm-4 control-label'>Nom</label>";
				echo "<div class='col-sm-8'>";
				echo "<p class='form-control-static'>$usuari->usu_nom</p>";
				echo "</div>";
			echo "</div>";
			echo "<div class='form-group'>";
				echo "<label class='col-sm-4 control-label'>Cognom</label>";
				echo "<div class='col-sm-8'>";
				echo "<p class='form-control-static'>$usuari->usu_cognom</p>";
				echo "</div>";
			echo "</div>";
			echo "<div class='form-group'>";
				echo "<label class='col-sm-4 control-label'>Correu</label>";
				echo "<div class='col-sm-8'>";
				echo "<p class='form-control-static'>$usuari->usu_email</p>";
				echo "</div>";
			echo "</div>";
			echo "<div class='form-group'>";
				echo "<label class='col-sm-4 control-label'>Data d'alta</label>";
				echo "<div class='col-sm-8'>";
				echo "<p class='form-control-static'>$usuari->usu_data_registre</p>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
			?>
		<div class="col-sm-7">
		<br>
			<button onclick="enviarDatos('usuario_mod.php');" class="btn btn-warning">Modificar perfil</button>
			<button onclick="enviarDatos('usuario_pass.php');" class="btn btn-warning">Canviar contrasenya</button>		
		</div>
				
	<?php
		}
?>