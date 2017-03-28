<?php 
//Esta pagina muestra el contacto del patrocinador despues de haber realizado la 'compra' para que el usario se ponga en contacto
include '../../conexio/conexio.php';
include '../../includes/visualizarRestrictivo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Enhorabona</title>
	<?php include("../head.php");?>
</head>
<body style="background-color: #caf1ca">

<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6" style="background-color: white; border:3px #218221 solid; padding: 2%;margin-top: 25%">
			<table>
				<tr>
<?php
extract($_REQUEST);
//Consulta per saber els premis y els seus patrocinadors
	$sql_premi = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patr_id WHERE eco_id='$premi'";
	$premis = mysqli_query($conexion, $sql_premi);
	while ($prem = mysqli_fetch_object($premis)) {
//Div per posarse en contacte amb el patrocinador
		echo "<td style='padding: 2%; width: 35%'><img src='../../../img/patrocinadors/$prem->patr_logo'></td>";
		echo "<td style='padding: 2%; width: 65%'>";
		echo "<h3>Enhorabona, has obtingut <b>$prem->eco_nom_premi</b>!!</h3><br>";
		echo "Imprimeix el següent <a href='pdf.php?premi=$premi'><b>PDF</b></a> per obtenir el teu premi<br/><br/>";
		echo "</td>";
	}
?>				
								
				</tr>
			</table>
			<div class="col-sm-12">
				<a href='ecopremis.php' style="float: right;">Tornar a Premis</a>
			</div>				
		</div>
	</div>
</div>
</body>
</html>