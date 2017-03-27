<?php 
	include '../../includes/visualizarPermisivo.php';
	include '../../conexio/conexio.php';
	//recogemos el id del evento
	$eve_id = $_GET['eve_id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<input type="hidden" id="eve_id" value="<?php echo $eve_id; ?>">
<div>
<?php 
	$sql = "SELECT * FROM `tbl_events` WHERE eve_id = $eve_id";
	$eventos=mysqli_query($conexion, $sql);
    if (mysqli_num_rows($eventos) != 0){
      while ($evento = mysqli_fetch_array($eventos)) {
		$titol = $evento['eve_nom'];
		$descripcio = $evento['eve_descripcio'];
		$eve_id = $evento['eve_id'];
		$max_part = $evento['eve_max_part'];
		?>
<table style="border: 1px;">
	<tr>
		<?php 
			echo "
			<th>$titol</th></tr>
			<tr><th>$descripcio</th></tr>
			";
		?>
			<div id='likes'></div>
</tr>
</table>

		<?php
		
		//Consulta para ver si quedan plazas.
		$sql1 = "SELECT * FROM `tbl_participants` WHERE eve_id = $eve_id";
		$verCapacidad = mysqli_query($conexion, $sql1);
		if (mysqli_num_rows($verCapacidad)) {
			$contador = 0;
			while ($capacidad = mysqli_fetch_array($verCapacidad)) {
			$contador++;	
			}
		}else {
			$contador = 0;
		}

		if (isset($usu) && $contador<$max_part) {
			//si hay usuario y plazas.
			echo "<a href='../php/proc/participar.proc.php?eve_id=$eve_id'>participar!</a>";
		}elseif (isset($usu) && $contador == $max_part) {
			//esto debería ir en rojo
			echo "<h1>No quedan plazas!</h1>";
		}elseif (!isset($usu)) {
			echo "<a href='provandoLogin.html'>logueate/regístrate para participar!</a>";
		}
	// 	";
      }
    }
 ?>
	


	
	
<script type="text/javascript">
		function objetoAjax(){
					var xmlhttp=false;
					try {
						xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
				 
						try {
							xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (E) {
							xmlhttp = false;
						}
					}
				 
					if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
					  xmlhttp = new XMLHttpRequest();
					}
					return xmlhttp;
				}

				function enviarDatos(){
				// var eve_id = document.getElementById('eve_id').value;
				  // alert(document.getElementById("eve_id").value);
				  var ajax=objetoAjax(eve_id);
				 
				  ajax.open("POST", 'eventos_likes.php'+'?'+'eve_id='+eve_id.value, true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('likes').innerHTML = ajax.responseText;
						// alert(ajax.responseText);
					}
				  }
  				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send(eve_id);
				}

				function votar(num){
				// var eve_id = document.getElementById('eve_id').value;
				  // alert(document.getElementById("eve_id").value);
				  var ajax=objetoAjax(eve_id);
				 
				  ajax.open("POST", 'votar.php'+'?'+'eve_id='+eve_id.value+'&num='+num, true);
				  enviarDatos();
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('likes').innerHTML = ajax.responseText;
						// ajax.send('num='+num);
						// alert(ajax.responseText);
						enviarDatos();
					}
				  }
  				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send(eve_id);
				}

		 window.onload = enviarDatos();	
	</script>
</body>
</html>