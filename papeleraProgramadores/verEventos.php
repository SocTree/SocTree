<?php
	include '../php/conexio/conexio.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
<?php 
	$sql = "SELECT * FROM `tbl_events`";
	$eventos=mysqli_query($conexion, $sql);
    if (mysqli_num_rows($eventos) != 0){
      $contador3 = 0;
      while ($evento = mysqli_fetch_array($eventos)) {
        if ($contador3 == 3) {
			$contador3 = 0;
			echo "</div><br><div>";
		}
		$contador3++;
		$titol = $evento['eve_nom'];
		$descripcio = $evento['eve_descripcio'];
		$eve_id = $evento['eve_id'];
		echo "<div>
			<a href='verEvento.php?eve_id=$eve_id'>$titol</a><br>
			$descripcio 
			</div>
		";
      }
    }



	
	
 ?>

</body>
</html>