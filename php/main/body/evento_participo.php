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
	echo "<h1>T'has apuntat correctament</h1>";

?>				
								
				</tr>
			</table>
			<div class="col-sm-12">
				<a href='../main/body/eventos.php' style="float: right;">Tornar a Events</a>
			</div>				
		</div>
	</div>
</div>
</body>
</html>