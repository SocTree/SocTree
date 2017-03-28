<?php 
//Esta pagina muestra el contacto del patrocinador despues de haber realizado la 'compra' para que el usario se ponga en contacto

include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
extract($_REQUEST);
//Consulta per saber els premis y els seus patrocinadors
	$sql_premi = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patr_id WHERE eco_id='$premi'";
	$premis = mysqli_query($conexion, $sql_premi);

	while ($prem = mysqli_fetch_object($premis)) {
//Div per posarse en contacte amb el patrocinador
		echo "<h1>Enhorabona, has obtingut <b>$prem->eco_nom_premi</b></h1>";
		echo "Imprimeix el següent <a href='pdf.php?premi=$premi'>PDF</a> per obtenir el teu premi<br/><br/>";
	}
	echo "<a href='ecopremis.php'>Tornar a ecochange</a>"
?>
</body>
</html>