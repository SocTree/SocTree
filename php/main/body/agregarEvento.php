<?php //NO OLVIDARSE DE PONER SESIONES!!!
session_start(); 
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
          	<h4 class="modal-title">Afegir Event</h4>
		</div>
		<div class="modal-body">
			<form name="anadirEvento" action="../../proc/agregarEvento.proc.php">
				Nom del projecte:
				<input type="textArea" name="eve_name"><br><br>
				Descripció:<br>
				<textarea name="eve_descripcio" maxlength="5000"></textarea><br><br>
				Tipus:
				<select name="eve_tipus">
				  <option value="esport">Esport</option>
				  <option value="gastronòmic">Gastronòmic</option>
				  <option value="3R">3R</option>
				  <option value="diy">DIY</option>
				  <option value="solidari" selected>Solidari</option>
				</select><br><br>
				Dia de l'event:
				<input type="date" name="eve_data"><br><br>
				Lloc:
				<input type="text" name="eve_localitzacio"><br><br>
				<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>

				<!-- Aun no se si el estado lo controlamos nosotros o el dueño del evento. Lo pongo por si acaso -->
				
				Participants:
					<li>Mínim:<input type="number" name="eve_min_part"><br><br></li>
					<li>Màxim:<input type="number" name="eve_max_part"><br><br></li>
		</div>
		<div class="modal-footer">
				<input type="submit" class="btn btn-success" name="enviar">
			</form>
		</div>
	</div>
</div>

	



</body>
</html>