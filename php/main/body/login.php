<?php //NO OLVIDARSE DE PONER SESIONES!!!
//session_start(); 
//poner el inlude visualizarRestrictivo.php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
			<form name="login" action="php/proc/login.proc.php">
		    <input type="text" placeholder="Email" class="form-control" name="email">
            <input type="password" placeholder="Password" class="form-control" name="password">

				<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>

				
				
		
		</div>
		<div class="modal-footer">
				<input type="submit" class="btn btn-success" name="enviar">
			</form>
		</div>
	</div>
</div>

	



</body>
</html>