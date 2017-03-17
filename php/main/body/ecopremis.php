<?php 
	include '../../conexio/conexio.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>EcoChange</h1>
<?php 
	//Consulta de todos los premios y sus respectivos patrocinadores
	$sql = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patrid";

	$premios = mysqli_query($conexion, $sql);


	if (mysqli_num_rows($premios)>0){
		while ($premio = mysqli_fetch_object($premio)) {
			echo "<table>";
				echo "<tr>";
					echo "<th>Producte</th>";
					echo "<th>Preu</th>";
					echo "<th>Descripcio</th>";
					echo "<th>Foto</th>";
					echo "<th>Patrocinador</th>";
				echo "</tr>";
				echo "<tr>";
					echo "<th>$premio->eco_nom_premi</th>";
					echo "<th>$premio->eco_preu_tokens</th>";
					echo "<th>$premio->eco_descripcio</th>";
					echo "<th>$premio->eco_foto</th>";
					echo "<th>$premio->patr_nom $premio->eco_logo</th>";
				echo "</tr>";

			echo "</table>";
		}
	} else {
		echo "Ara mateix no hi ha premis, torna més tard";
	}
?>
</body>
</html>