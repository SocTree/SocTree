<?php
	include '../php/includes/visualizarPermisivo.php';
	include '../php/conexio/conexio.php';

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
		if (isset($usu)) {
			echo "<a href=''>";
		}
	// 	";
 //      }
 //    }


	
	
 ?>

</body>
</html>