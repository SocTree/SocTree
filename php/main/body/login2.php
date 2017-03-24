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
<!-- Modal Login #modal1 -->
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        
			<form name="login" action="php/proc/login.proc.php">
        <input type="text" placeholder="Email" class="form-control" name="email"><bR>   
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
      </div>
      <div class="modal-footer">
        No tens compte,<a href="#modal-2" data-toggle="modal" data-dismiss="modal">registra't.</a> &nbsp;
        <input type="submit" class="btn btn-success" name="enviar"><bR>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
  
  
  
  <!-- Modal Registre #modal -->
<div class="modal fade" id="modal-2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Registra't</h4>
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

        
  
        
      </div>
      <div class="modal-footer">
     Ya tens compte,<a href="#modal-1" data-toggle="modal" data-dismiss="modal">Inicia sessió.</a> &nbsp;
        <input type="submit" class="btn btn-success" name="enviar"><bR>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
  
  
  
  
</body>
</html>