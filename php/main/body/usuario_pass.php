<?php 
	echo "<form id='pass' onsubmit='return validarPass();' method='POST' action='../../proc/usuario_mod_password.proc.php'>";
	echo "<div class='col-sm-offset-3 col-sm-6'>";
		echo "<div class='form-group'>";
			echo "<label for='usu_password'>Contrasenya</label>";
			echo "<input type='password' id='usu_password' class='form-control' name='usu_password' value='' />";
		echo "</div>";
		echo "<div class='form-group'>";
			echo "<label for='usu_nova_pass'>Nova contrasenya</label>";
			echo "<input type='password' id='usu_nova_pass' class='form-control' name='usu_nova_pass' value='' />";
		echo "</div>";
		echo "<div class='form-group'>";
			echo "<label for='usu_rep_nova'>Repertir contrasenya</label>";
			echo "<input type='password' id='usu_rep_nova' class='form-control' name='usu_rep_nova' value='' />";
		echo "</div>";
			echo "<button class='btn btn-success'>Guardar Canvis</button>";
	echo "</div>";
	echo "</form>";
?>
<div class='col-sm-12'>
	<a href='#' onclick='enviarDatos("usuario_perfil.php")' class='btn btn-default' style="float: right;">Tornar</a>
</div>
