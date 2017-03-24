<?php 
	include '../../conexio/conexio.php';
	include '../../includes/visualizarPermisivo.php';
$usu=1;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
	function mostrarDatos(eve){
		var button = "b"+eve;
		document.getElementById(button).innerHTML = "Ocultar participants";
		button.setAttribue('name', "2");
	}

	</script>

</head>
<body>
	<h1>Events d'avui</h1>
	<h3>Events creats</h3>
	<table border="">
		<tr>
			<th>Nom</th>
			<th>Tipus</th>
			<th>Data</th>
			<th>Localització</th>
			<th>Participants</th>
		</tr>
	<?php 
	if (isset($usu)){
		$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='actiu'";

		$creats = mysqli_query($conexion, $sql_creat);

		if (mysqli_num_rows($creats)){
			while ($creat = mysqli_fetch_object($creats)) {

				$sql_participants = "SELECT * FROM tbl_participants INNER JOIN tbl_usuari ON tbl_usuari.usu_id = tbl_participants.usu_id  WHERE eve_id = '$creat->eve_id'";
				$participants = mysqli_query($conexion, $sql_participants);

				echo "<tr>";
					echo "<td>$creat->eve_nom</td>";
					echo "<td>$creat->eve_tipus</td>";
					echo "<td>$creat->eve_data</td>";
					echo "<td>$creat->eve_localitzacio</td>";
					echo "<td>".mysqli_num_rows($participants)."</td>";
					echo "<td><button id = 'b$creat->eve_id' name='1' onclick='mostrarDatos($creat->eve_id);'>Mostrar participants</button></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td colspan='6'>";
		 				echo "<div id='$creat->eve_id'>";
		 					echo "<form>";
		 					while ($participant = mysqli_fetch_object($participants)) {
		 						echo "$participant->usu_nom $participant->usu_cognom <input type='checkbox' name='part' value='$participant->part_id'/><br/>"; 	
		 					}
		 						echo "<br/>";
		 						echo "<button>Enviar llista</button>";
		 					echo "</form>";
		 				echo "</div>";
					echo "</td>";
				echo "</tr>";

			}

		}else{
			echo "<tr>";
				echo "<td colspan='5'>No tens cap event creat per avui</td>";
			echo "</tr>";
		}
	}else {
		echo "<tr>";
			echo "<td colspan='5'>$msgNoUsuarios</td>";
		echo "</tr>";
	}


	 ?>
	</table>
	<h3>Events a participar</h3>
	<h1>Próxims events</h1>
	<h3>Events creats</h3>
	<h3>Events a participar</h3>
	<h1>Events acabats</h1>
	<h3>Events creats</h3>
	<h3>Events a participar</h3>

</body>
</html>