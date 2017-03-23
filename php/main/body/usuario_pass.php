<?php 
	echo "<form id='pass' onsubmit='return validarPass();' method='POST' action='../../proc/usuario_mod_password.proc.php'>";
			echo "Contrasenya: <input type='password' name='usu_password' value='' /><br/><br/>";
			echo "Nova contrasenya: <input type='password' name='usu_nova_pass' value='' /><br/>";
			echo "Repertir contrasenya: <input type='password' name='usu_rep_nova' value='' /><br/>";
			echo "<button>Guardar Canvis</button>";
	echo "</form>";
?>
<a href='#' onclick='enviarDatos("usuario_perfil.php")'>Tornar</a>