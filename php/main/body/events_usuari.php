<?php 
	include '../../conexio/conexio.php';
	include '../../includes/visualizarPermisivo.php';

	$hoy = date("Y-m-d");


	$sql = "SELECT * FROM tbl_events WHERE eve_data<'$hoy' AND eve_estat='actiu'";
	$eventos = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($eventos)){
		$sql_update = "UPDATE tbl_events SET eve_estat='finalitzat' WHERE eve_data<'$hoy' AND eve_estat='actiu'";
		mysqli_query($conexion, $sql_update);
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
	function mostrarDatos(eve){
		var button = "b"+eve;
		if (document.getElementById(eve).style.display == "block"){
			document.getElementById(button).innerHTML = "Mostrar participants";
		document.getElementById(eve).style.display = "none";
		}else  {
			document.getElementById(button).innerHTML = "Ocultar participants";
		document.getElementById(eve).style.display = "block";
		}
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

td.invi {
	display: none;
	column-span: all;
}
</style>

</head>
<body>
<<<<<<< HEAD
<!-- Header -->
	<?php include("../header/header.php");?>
<!-- fin header -->
<div class="contenido_index event_main" style="overflow-x: hidden;">
	<div class="row">
		<div class="col-md-12">
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../img/web/icon/png/event-nom.png">	
		</div>
	</div>
</div>
<div class="container" style="margin-top: 5.3%;">
	<div class="col-sm-12" style="margin-bottom: 5%; background-color: #caf1ca; padding: 2% ">
		<a href="#" class="abuelo">Events d'avui</a>
		
		<div id='padre'>
		<div class="col-sm-12" style="margin-top:2.5%;">
			<a href="#" class='padre'>Events creats</a>
			<div class="col-sm-12 hijo" style="margin-top:3%; background-color: #caf1ca">
			<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
	<button class='abuelo'>Events d'avui</button>
	<div id='padre'>
			<button class='padre'>Events creats</button>
			<div class="hijo">
			<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
				$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='actiu' AND eve_data='$hoy' ORDER BY eve_data";

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
							echo "<td colspan='6' class='invi' id='$creat->eve_id'>";
							if(mysqli_num_rows($participants)){
				 					while ($participant = mysqli_fetch_object($participants)) {
				 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
				 					}
				 			} else {
				 				echo "No hi ha participants";
				 			}					
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
<<<<<<< HEAD
		</div>
		<div class="col-sm-12" style="margin-top:2.5%;">
			<a href="#" class="padre">Events a participar</a>
			<div class="col-sm-12 hijo" style="margin-top:3%; background-color: #caf1ca">
					<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
			<button class="padre">Events a participar</button>
			<div class="hijo">
					<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
				$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE tbl_participants.usu_id = '$usu' AND eve_estat='actiu' AND eve_data='$hoy' ORDER BY eve_data";

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
<<<<<<< HEAD
	<div class="col-sm-12" style="margin-bottom:5%; background-color: #caf1ca;padding: 2%">
			<a href="#" class='abuelo'>Pròxims events</a>
	<div id='padre'>
	<div class="col-sm-12" style="margin-top:2.5%;">
		<a href="#" class='padre'>Events creats</a>
				<div class="col-sm-12 hijo" style="margin-top:3%; background-color: #caf1ca">
				<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
	<button class='abuelo'>Pròxims events</button>
	<div id='padre'>
				<button class='padre'>Events creats</button>
				<div class="hijo">
				<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
					$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='actiu' AND eve_data>'$hoy' ORDER BY eve_data";

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
								echo "<td colspan='7' class='invi' id='$creat->eve_id'>";
							if(mysqli_num_rows($participants)){
				 					while ($participant = mysqli_fetch_object($participants)) {
				 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
				 					}
				 			} else {
				 				echo "No hi ha participants";
				 			}					
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
<<<<<<< HEAD
	</div>
				
	<div class="col-sm-12" style="margin-top:2.5%;">
		<a href="#" class='padre'>Events a participar</a>
				<div class="col-sm-12 hijo" style="margin-top:3%; background-color: #caf1ca">
						<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
				<button class='padre'>Events a participar</button>
				<div class="hijo">
						<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
					$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE tbl_participants.usu_id = '$usu' AND eve_estat='actiu' AND eve_data>'$hoy' ORDER BY eve_data";

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
<<<<<<< HEAD
				
	</div>
	</div>
	<div class="col-sm-12" style="margin-bottom: 5%; background-color: #caf1ca;padding: 2%">
			<a href="#" class="abuelo">Events acabats</a>
	<div id="padre">
	<div class="col-sm-12" style="margin-top:2.5%;">
		<a href="#" class="padre">Events creats</a>
				<div class="col-sm-12 hijo" style="margin-top:3%; background-color: #caf1ca">
				<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
	<button class="abuelo">Events acabats</button>
	<div id="padre">
				<button class="padre">Events creats</button>
				<div class="hijo">
				<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
					$sql_creat = "SELECT * FROM tbl_events WHERE usu_id = '$usu' AND eve_estat='finalitzat' AND eve_data<'$hoy' ORDER BY eve_data";

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
								echo "<td colspan='7' class='invi' id='$creat->eve_id'>";
							if(mysqli_num_rows($participants)){
				 					while ($participant = mysqli_fetch_object($participants)) {
				 						echo "$participant->usu_nom $participant->usu_cognom<br/>"; 	
				 					}
				 			} else {
				 				echo "No hi ha participants";
				 			}					
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
<<<<<<< HEAD
	</div>
	<div class="col-sm-12" style="margin-top:2.5%;">
		<a href="#" class="padre">He participat</a>
				<div class="col-sm-12 hijo" style="margin-top:3%;background-color: #caf1ca">
						<table class="table table-striped" style="margin:2%;background-color: white;width: 100%">
=======
				<button class="padre">Events a participar</button>
				<div class="hijo">
						<table border="">
>>>>>>> parent of 22cc31b... ecopremis-header
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
					$sql_creat = "SELECT * FROM tbl_usuari INNER JOIN tbl_participants ON tbl_participants.usu_id = tbl_usuari.usu_id INNER JOIN tbl_events ON tbl_events.eve_id = tbl_participants.eve_id WHERE tbl_participants.usu_id = '$usu' AND eve_estat='finalitzat' AND eve_data<'$hoy' ORDER BY eve_data";

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
<<<<<<< HEAD
				
	</div>
	</div>

	</div>
<!-- Footer -->
<div style="position: fixed;">
	
</div>
	<?php include("../footer/footer.php");?>
<!-- fin footer -->
=======
>>>>>>> parent of 22cc31b... ecopremis-header
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