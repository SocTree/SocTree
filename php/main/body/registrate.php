<!-- Lo pongo aquí ya lo hareis como si fuera ventana modal esto es para hacer el proc -->

<?php 
//IMPORTANTE!!!!!!!
//FUNCION PARA QUE NO PUEDA VER ESTA PARTE UN USUARIO ACTIVO
if (isset($_SESSION['usu_id'])) {
	header('Location:../../../index.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



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
	</form>

	<?php /*
			<form name="login" action="php/proc/login.proc.php">
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
		    <input type="text" placeholder="Email" class="form-control" name="email"><bR>
	*/
				//<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>
			


				
				
		
		</div>
		<div class="modal-footer">
		 No tens compte, <a href="#" data-toggle="modal" data-target="#ModalRegistro"> registra't.<div class="modal fade" id="ModalLogin" role="dialog"><?php include_once("php/main/body/registrate.php"); ?></div> </a> &nbsp; <input type="submit" class="btn btn-success" name="enviar"><bR>
			
		</div>
	</div>
</div>

	



</body>
</html>

