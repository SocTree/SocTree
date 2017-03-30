<?php 
//Esta pagina muestra que se ha realizado correctamente la inscripción como participante.
include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar event</title>
	<?php include("../head.php");?>
</head>
<body style="background-color: #caf1ca">

<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6" style="background-color: white; border:3px #218221 solid; padding: 2%;margin-top: 10%">
			<div class="modal-body">
			
			<form name="anadirEvento" action="../../proc/agregarEvento.proc.php">
				Nom de l'event:
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
			<div class="col-sm-12">
				<a href='eventos.php' style="float: right;">Tornar a Events</a>
			</div>				
		</div>
	</div>
</div>
</body>
</html>