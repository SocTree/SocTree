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
<div class="modal-dialog modal-sm">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
	
			<form name="login" action="php/proc/login.proc.php">
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
		    <input type="text" placeholder="Email" class="form-control" name="email"><bR>

				<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>
		</div>
		<div class="modal-footer">
		 No tens compte,<a href="#ModalRegistro" data-toggle="modal" data-dismiss="modal"> registra't.</a> &nbsp; 

		 <input type="submit" class="btn btn-success" name="enviar"><bR>
			</form>
		</div>
	</div>
</div>



<div class="modal-dialog modal-sm">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">

		<form action="../../proc/registrate.proc.php">
	nom:
	<input type="text" name="usu_nom"><br>
	cognoms:
	<input type="text" name="usu_cognom"><br>
	correu:
	<input type="email" name="usu_email"><br>
	Contrasenya:
	<input type="password" name="usu_password"><br>
	Repetiu la contrasenya:
	<input type="password" name="usu_password2"><br>
	<input type="submit" name="enviar">

	<?php /*
			<form name="login" action="php/proc/login.proc.php">
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
		    <input type="text" placeholder="Email" class="form-control" name="email"><bR>
	*/
				//<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>
			


				
				
		
		</div>
		<div class="modal-footer">
		 Ya tens compte, <a href="#ModalLogin" data-toggle="modal" data-target="#ModalRegistro"> Inicia sessió.<div class="modal fade" id="ModalLogin" role="dialog"><?php include_once("php/main/body/registrate.php"); ?></div> </a> &nbsp; <input type="submit" class="btn btn-success" name="enviar"><bR>
			</form>
		</div>
	</div>
</div>

	



</body>
</html>

