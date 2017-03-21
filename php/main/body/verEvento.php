<?php 
	include '../../includes/visualizarPermisivo.php';
	include '../../conexio/conexio.php';
	//recogemos el id del evento
	$eve_id = $_GET['eve_id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
<?php 
	$sql = "SELECT * FROM `tbl_events` WHERE eve_id = $eve_id";
	$eventos=mysqli_query($conexion, $sql);
    if (mysqli_num_rows($eventos) != 0){
      while ($evento = mysqli_fetch_array($eventos)) {
		$titol = $evento['eve_nom'];
		$descripcio = $evento['eve_descripcio'];
		$eve_id = $evento['eve_id'];
		$max_part = $evento['eve_max_part'];
		?>
<table style="border: 1px;">
	<tr>
		<?php 
			echo "
			<th>$titol</th></tr>
			<tr><th>$descripcio</th></tr>
			";
		?>
</tr>
</table>

		<?php
		//Consulta para ver si quedan plazas.
		$sql1 = "SELECT * FROM `tbl_participants` WHERE eve_id = $eve_id";
		$verCapacidad = mysqli_query($conexion, $sql1);
		if (mysqli_num_rows($verCapacidad)) {
			$contador = 0;
			while ($capacidad = mysqli_fetch_array($verCapacidad)) {
			$contador++;	
			}
		}else {
			$contador = 0;
		}

		if (isset($usu) && $contador<$max_part) {
			//si hay usuario y plazas.
			echo "<a href='../php/proc/participar.proc.php?eve_id=$eve_id'>participar!</a>";
		}elseif (isset($usu) && $contador == $max_part) {
			//esto debería ir en rojo
			echo "<h1>No quedan plazas!</h1>";
		}elseif (!isset($usu)) {
			echo "<a href='provandoLogin.html'>logueate/regístrate para participar!</a>";
		}
	// 	";
      }
    }
 ?>
	


	
	

</body>
</html>