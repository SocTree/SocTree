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
<form name="anadirEvento" action="../php/proc/agregarEvento.proc.php">
	Nom del projecte:
	<input type="textArea" name="eve_name"><br><br>
	Descripció:<br>
	<textarea name="eve_descripcio" maxlength="500"></textarea><br><br>
	Tipus:
	<select name="eve_tipus" form="anadirEvento">
	  <option value="esport">Esport</option>
	  <option value="gastronòmic">Gastronòmic</option>
	  <option value="3R">3R</option>
	  <option value="diy">DIY</option>
	</select><br><br>
	Dia de l'event:
	<input type="date" name="eve_data"><br><br>
	Lloc:
	<input type="text" name="eve_localitzacio"><br><br>
	<?php //echo "<input type='hidden' name='usu_id' value='$_SESSION['usu_id']><br><br>" ?>

	<!-- Aun no se si el estado lo controlamos nosotros o el dueño del evento. Lo pongo por si acaso -->
	Estat:
	<select name="eve_estat" form="anadirEvento">
	  <option value="actiu">Actiu</option>
	  <option value="inactiu">Inactiu</option>
	  <option value="finalitzat">Finalitzat</option>
	</select><br><br>
	Participants:
		<li>Mínim:<input type="number" name="eve_min_part"><br><br></li>
		<li>Màxim:<input type="number" name="eve_max_part"><br><br></li>
	<input type="submit" name="enviar">


</form>
</body>
</html>