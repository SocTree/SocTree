<?php
	include '../../conexio/conexio.php';
	// include '../header/header.php' ;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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

				function enviarDatos(val){
				  var ajax=objetoAjax();
				 
				  ajax.open("POST", 'filtro_eventos.php', true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('total').innerHTML = ajax.responseText;
					}
				  }
  				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send("val="+val);
				}

		// window.onload = enviarDatos(1);	
	</script>
</head>
<body>
Tots:<input type="radio" name="tipo" value="0" onchange="enviarDatos(this.value)"><br>
Esport:<input type="radio" name="tipo" value="1" onchange="enviarDatos(this.value)"><br>
Gastronomic:<input type="radio" name="tipo" value="2" onchange="enviarDatos(this.value)"><br>
3R:<input type="radio" name="tipo" value="3" onchange="enviarDatos(this.value)"><br>
Diy:<input type="radio" name="tipo" value="4" onchange="enviarDatos(this.value)"><br>
Solidari:<input type="radio" name="tipo" value="5" onchange="enviarDatos(this.value)"><br>
<div id="total">
	
<div>
<?php 
	$sql = "SELECT * FROM `tbl_events` WHERE eve_estat = 'actiu'";
	$sqlEsport = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'esport' AND eve_estat = 'actiu'";
	$sqlGastronomic = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'gastronomic' AND eve_estat = 'actiu'";
	$sql3R = "SELECT * FROM `tbl_events` WHERE eve_tipus = '3R' AND eve_estat = 'actiu'";
	$sqlDiy = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'diy' AND eve_estat = 'actiu'";
	$sqlSolidari = "SELECT * FROM `tbl_events` WHERE eve_tipus = 'solidari' AND eve_estat = 'actiu'";

	if (isset($_GET['eve_tipus'])) {
	//decidiendo sql a usar:
	switch ($_GET['eve_tipus']) {
		case 'esport':
			$sql = $sqlEsport;
			break;
		case 'gastronomic':
			$sql = $sqlGastronomic;
			break;
		case '3R':
			$sql = $sql3R;
			break;
		case 'diy':
			$sql = $sqlDiy;
			break;
		case 'solidari':
			$sql = $sqlSolidari;
			break;
		
		default:
			break;
	}
	}
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

</div>
</body>
</html>