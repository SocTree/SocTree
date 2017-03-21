<?php 
	include '../../conexio/conexio.php';
	include '../../includes/visualizarPermisivo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>EcoPremis</h1>
<?php 
	//Consulta de todos los premios y sus respectivos patrocinadores
	$sql = "SELECT * FROM tbl_ecochange INNER JOIN tbl_patrocinador ON tbl_patrocinador.patr_id = tbl_ecochange.patr_id";

	$premios = mysqli_query($conexion, $sql);

	//Consulta para saber cuantos tokens tiene el usuario
	if (isset($usu)){
		$sql_moneder = "SELECT * FROM tbl_moneder WHERE usu_id ='$usu'";
		$tokens = mysqli_query($conexion, $sql_moneder);
	
	while ($token = mysqli_fetch_object($tokens)) {
	//Guardamos las monedas que tiene el usuario en la variable $monedes
						 $monedes = $token->mon_quantitat;
						}
	} else {
		echo "<p>$msgNoUsuarios</p>";
	}

	if (mysqli_num_rows($premios)>0){
		//Si existen premios hacemos la tabla
		while ($premio = mysqli_fetch_object($premios)) {
			echo "<table border>";
				echo "<tr>";
					echo "<th>Producte</th>";
					echo "<th>Preu</th>";
					echo "<th>Descripció</th>";
					echo "<th>Foto</th>";
					echo "<th>Patrocinador</th>";
					echo "<th></th>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>$premio->eco_nom_premi</td>";
					echo "<td>$premio->eco_preu_tokens</td>";
					echo "<td>$premio->eco_descripcio</td>";
					echo "<td>$premio->eco_foto</td>";
					echo "<td><img src='../../../img/patrocinadors/$premio->patr_logo'/></td>";
					echo "<td>";
				if (isset($usu)){
						echo "<form action='../../proc/ecopremis.proc.php'>";
						//Enviamos al proc un campo oculto del id del premio
						echo "<input type='hidden' name='premio' value='$premio->eco_id' />";
						$boton = "<button ";
					//Si el usuario no tiene suficientes tokens el boton para adquirir se deshabilita
						if ($monedes < $premio->eco_preu_tokens){
							 	$boton .= "disabled";
							 }
						echo $boton.">Adquirir</button>";
						echo "</form>";
					} else {
						echo "<button disabled>Adquirir</button>";
					}
					echo "</td>";
				echo "</tr>";

			echo "</table>";
		}
	} else {
		echo "Ara mateix no hi ha premis, torna més tard";
	}
?>
</body>
</html>