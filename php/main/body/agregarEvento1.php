<?php
ob_start();
if (file_exists('../../includes/visualizarPermisivo.php')) {
					include_once '../../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
?>
<?php 
//Esta pagina muestra que se ha realizado correctamente la inscripción como participante.
include '../../conexio/conexio.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar event</title>
	<?php include("../head.php");?>
	<link rel="stylesheet" type="text/css" href="../../../css/agregarParticiparEventos.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6 recuadro">
			<div class="modal-body">
			
			<form name="anadirEvento" action="../../proc/agregarEvento.proc.php">
				<i>Afegir un event es molt fàcil. Engresca els altres! Disfruta! Comparteix!</i><br><br>
				<label> Nom de l'event:<br>
				<input type="textArea" name="eve_name">
				</label>
				<br>
				<label>
				Descripció:<br>
				<textarea name="eve_descripcio" maxlength="5000"></textarea>
				</label>
				<br>
				<label>
				Tipus:<br>
				<select name="eve_tipus">
				  <option value="Esports">Esports</option>
				  <option value="Gastronomic">Gastronòmic</option>
				  <option value="3R">4R</option>
				  <option value="DIY">DIY</option>
				  <option value="Solidari" selected>Solidari</option>
				</select>
				</label>
				<br>
				<label>
				Dia de l'event:<br>
				<input type="date" name="eve_data">
				</label><br>
				<label>
				Hora:<br>
				<input type="number" name="eve_hour" min="1" max="24" step="1" style="text-align: right;"> :
				<input type="number" name="eve_minute" min="00" max="60" step="1">
				</label>
				<br>
				<label>
				Lloc:<br>
				<input type="text" name="eve_localitzacio">
				</label>
				<br>
				<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>

				<!-- Aun no se si el estado lo controlamos nosotros o el dueño del evento. Lo pongo por si acaso -->
				<label>
				Participants:<br>
					<li><i>Mínim:</i><input type="number" name="eve_min_part" min="1"><br><br></li>
					<li><i>Màxim:</i><input type="number" name="eve_max_part"><br><br></li>
				</label>
		</div>
		<div class="modal-footer">
				<input type="submit" class="btn btn-success" name="enviar">
			</form>
		</div>
			<div class="col-sm-12">
				<a href='eventos.php' style="">Tornar a Events</a>
			</div>				
		</div>
	</div>
</div>
</body>
</html>