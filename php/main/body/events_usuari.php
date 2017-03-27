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

	<style>
button.abuelo {
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 24px;
    transition: 0.4s;
    background-color: blue;
}

button.abuelo.active, button.abuelo:hover {
    background-color: #ddd; 
}

div#padre {
    padding: 0 18px;
    display: none;
    background-color: white;
}

button.padre {
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 18px;
    transition: 0.4s;
    background-color: green;
}


button.padre.active, button.padre:hover {
    background-color: #ddd; 
}

div.hijo {
    padding: 0 18px;
    display: none;
    background-color: white;
}
</style>

</head>
<body>
	<button class='abuelo'>Events d'avui</button>
	<div id='padre'>
			<button class='padre'>Events creats</button>
			<div class="hijo">
			<table border="">
				<tr>
					<th>Nom</th>
					<th>Tipus</th>
					<th>Hora</th>
					<th>Data</th>
					<th>Localització</th>
					<th>Participants</th>
				</tr>
			<?php 
			if (isset($usu)){
				$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='actiu' ORDER BY eve_data";

				$creats = mysqli_query($conexion, $sql_creat);

				if (mysqli_num_rows($creats)){
					while ($creat = mysqli_fetch_object($creats)) {

						$sql_participants = "SELECT * FROM tbl_participants INNER JOIN tbl_usuari ON tbl_usuari.usu_id = tbl_participants.usu_id  WHERE eve_id = '$creat->eve_id'";
						$participants = mysqli_query($conexion, $sql_participants);

						$hora=strstr($creat->eve_data, ' ');
						$data=strstr($creat->eve_data, ' ', true);

						echo "<tr>";
							echo "<td>$creat->eve_nom</td>";
							echo "<td>$creat->eve_tipus</td>";
							echo "<td>$hora</td>";
							echo "<td>$data</td>";
							echo "<td>$creat->eve_localitzacio</td>";
							echo "<td>".mysqli_num_rows($participants)."</td>";
							echo "<td><button id = 'b$creat->eve_id' name='1' onclick='mostrarDatos($creat->eve_id);'>Mostrar participants</button></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td colspan='7'>";
				 				echo "<div id='$creat->eve_id'>";
				 					while ($participant = mysqli_fetch_object($participants)) {
				 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
				 					}					
				 				echo "</div>";
							echo "</td>";
						echo "</tr>";

					}

				}else{
					echo "<tr>";
						echo "<td colspan='6'>No tens cap event creat per avui</td>";
					echo "</tr>";
				}
			}else {
				echo "<tr>";
					echo "<td colspan='6'>$msgNoUsuarios</td>";
				echo "</tr>";
			}


			 ?>
			</table>
			</div>
			<button class="padre">Events a participar</button>
			<div class="hijo">
					<table border="">
				<tr>
					<th>Nom</th>
					<th>Tipus</th>
					<th>Hora</th>
					<th>Data</th>
					<th>Localització</th>
					<th>Usuari creador</th>
				</tr>
			<?php 
			if (isset($usu)){
				$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE part_id = '$usu' AND eve_estat='actiu' ORDER BY eve_data";

				$creats = mysqli_query($conexion, $sql_creat);

				if (mysqli_num_rows($creats)){
					while ($creat = mysqli_fetch_object($creats)) {

						$hora=strstr($creat->eve_data, ' ');
						$data=strstr($creat->eve_data, ' ', true);

						echo "<tr>";
							echo "<td>$creat->eve_nom</td>";
							echo "<td>$creat->eve_tipus</td>";
							echo "<td>$hora</td>";
							echo "<td>$data</td>";
							echo "<td>$creat->eve_localitzacio</td>";
							echo "<td>$creat->usu_email</td>";
						echo "</tr>";

					}

				}else{
					echo "<tr>";
						echo "<td colspan='6'>No tens cap event per avui</td>";
					echo "</tr>";
				}
			}else {
				echo "<tr>";
					echo "<td colspan='6'>$msgNoUsuarios</td>";
				echo "</tr>";
			}


			 ?>
			</table>
		</div>
	</div>
	<button class='abuelo'>Pròxims events</button>
	<div id='padre'>
				<button class='padre'>Events creats</button>
				<div class="hijo">
				<table border="">
					<tr>
						<th>Nom</th>
						<th>Tipus</th>
						<th>Hora</th>
						<th>Data</th>
						<th>Localització</th>
						<th>Participants</th>
					</tr>
				<?php 
				if (isset($usu)){
					$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='inactiu' ORDER BY eve_data";

					$creats = mysqli_query($conexion, $sql_creat);

					if (mysqli_num_rows($creats)){
						while ($creat = mysqli_fetch_object($creats)) {

							$sql_participants = "SELECT * FROM tbl_participants INNER JOIN tbl_usuari ON tbl_usuari.usu_id = tbl_participants.usu_id  WHERE eve_id = '$creat->eve_id'";
							$participants = mysqli_query($conexion, $sql_participants);

							$hora=strstr($creat->eve_data, ' ');
							$data=strstr($creat->eve_data, ' ', true);

							echo "<tr>";
								echo "<td>$creat->eve_nom</td>";
								echo "<td>$creat->eve_tipus</td>";
								echo "<td>$hora</td>";
								echo "<td>$data</td>";
								echo "<td>$creat->eve_localitzacio</td>";
								echo "<td>".mysqli_num_rows($participants)."</td>";
								echo "<td><button id = 'b$creat->eve_id' name='1' onclick='mostrarDatos($creat->eve_id);'>Mostrar participants</button></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan='7'>";
					 				echo "<div id='$creat->eve_id'>";
					 					while ($participant = mysqli_fetch_object($participants)) {
					 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
					 					}					
					 				echo "</div>";
								echo "</td>";
							echo "</tr>";

						}

					}else{
						echo "<tr>";
							echo "<td colspan='6'>No tens cap event creat</td>";
						echo "</tr>";
					}
				}else {
					echo "<tr>";
						echo "<td colspan='6'>$msgNoUsuarios</td>";
					echo "</tr>";
				}


				 ?>
				</table>
				</div>
				<button class='padre'>Events a participar</button>
				<div class="hijo">
						<table border="">
					<tr>
						<th>Nom</th>
						<th>Tipus</th>
						<th>Hora</th>
						<th>Data</th>
						<th>Localització</th>
						<th>Usuari creador</th>
					</tr>
				<?php 
				if (isset($usu)){
					$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE part_id = '$usu' AND eve_estat='inactiu' ORDER BY eve_data";

					$creats = mysqli_query($conexion, $sql_creat);

					if (mysqli_num_rows($creats)){
						while ($creat = mysqli_fetch_object($creats)) {

							$hora=strstr($creat->eve_data, ' ');
						$data=strstr($creat->eve_data, ' ', true);

							echo "<tr>";
								echo "<td>$creat->eve_nom</td>";
								echo "<td>$creat->eve_tipus</td>";
								echo "<td>$hora</td>";
								echo "<td>$data</td>";
								echo "<td>$creat->eve_localitzacio</td>";
								echo "<td>$creat->usu_email</td>";
							echo "</tr>";

						}

					}else{
						echo "<tr>";
							echo "<td colspan='6'>No tens cap event per participar</td>";
						echo "</tr>";
					}
				}else {
					echo "<tr>";
						echo "<td colspan='6'>$msgNoUsuarios</td>";
					echo "</tr>";
				}


				 ?>
				</table>
				</div>
	</div>
	<button class="abuelo">Events acabats</button>
	<div id="padre">
				<button class="padre">Events creats</button>
				<div class="hijo">
				<table border="">
					<tr>
						<th>Nom</th>
						<th>Tipus</th>
						<th>Hora</th>
						<th>Data</th>
						<th>Localització</th>
						<th>Participants</th>
					</tr>
				<?php 
				if (isset($usu)){
					$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='finalitzat' ORDER BY eve_data";

					$creats = mysqli_query($conexion, $sql_creat);

					if (mysqli_num_rows($creats)){
						while ($creat = mysqli_fetch_object($creats)) {

							$sql_participants = "SELECT * FROM tbl_participants INNER JOIN tbl_usuari ON tbl_usuari.usu_id = tbl_participants.usu_id  WHERE eve_id = '$creat->eve_id'";
							$participants = mysqli_query($conexion, $sql_participants);

							$hora=strstr($creat->eve_data, ' ');
						$data=strstr($creat->eve_data, ' ', true);

							echo "<tr>";
								echo "<td>$creat->eve_nom</td>";
								echo "<td>$creat->eve_tipus</td>";
								echo "<td>$hora</td>";
								echo "<td>$data</td>";
								echo "<td>$creat->eve_localitzacio</td>";
								echo "<td>".mysqli_num_rows($participants)."</td>";
								echo "<td><button id = 'b$creat->eve_id' name='1' onclick='mostrarDatos($creat->eve_id);'>Mostrar participants</button></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan='7'>";
					 				echo "<div id='$creat->eve_id'>";
					 					while ($participant = mysqli_fetch_object($participants)) {
					 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
					 					}					
					 				echo "</div>";
								echo "</td>";
							echo "</tr>";

						}

					}else{
						echo "<tr>";
							echo "<td colspan='6'>No has finzalitzat cap event</td>";
						echo "</tr>";
					}
				}else {
					echo "<tr>";
						echo "<td colspan='6'>$msgNoUsuarios</td>";
					echo "</tr>";
				}


				 ?>
				</table>
				</div>
				<button class="padre">Events a participar</button>
				<div class="hijo">
						<table border="">
					<tr>
						<th>Nom</th>
						<th>Tipus</th>
						<th>Hora</th>
						<th>Data</th>
						<th>Localització</th>
						<th>Usuari creador</th>
					</tr>
				<?php 
				if (isset($usu)){
					$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE part_id = '$usu' AND eve_estat='finalitzat' ORDER BY eve_data";

					$creats = mysqli_query($conexion, $sql_creat);

					if (mysqli_num_rows($creats)){
						while ($creat = mysqli_fetch_object($creats)) {

							echo "<tr>";
								echo "<td>$creat->eve_nom</td>";
								echo "<td>$creat->eve_tipus</td>";
								echo "<td>$hora</td>";
								echo "<td>$data</td>";
								echo "<td>$creat->eve_localitzacio</td>";
								echo "<td>$creat->usu_email</td>";
							echo "</tr>";

						}

					}else{
						echo "<tr>";
							echo "<td colspan='6'>No has finzalitzat cap event</td>";
						echo "</tr>";
					}
				}else {
					echo "<tr>";
						echo "<td colspan='6'>$msgNoUsuarios</td>";
					echo "</tr>";
				}


				 ?>
				</table>
				</div>
	</div>
</body>
<script>
var acc = document.getElementsByClassName("abuelo");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}

var pad = document.getElementsByClassName("padre");
var j;

for (j = 0; j < pad.length; j++) {
    pad[j].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
</html>