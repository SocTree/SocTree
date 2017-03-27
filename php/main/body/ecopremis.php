<!DOCTYPE html>
<html>
<head>
	<title>EcoPremis</title>
	<?php include("../head.php");?>
	<link rel="stylesheet" type="text/css" href="../../../css/eventos.css">
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
				 
				  ajax.open("POST", 'filtro_ecopremis.php', true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('tabla').innerHTML = ajax.responseText;
					}
				  }
  				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send("val="+val);
				}

		window.onload = enviarDatos(1);	
	</script>
</head>
<body>
<div style="height: 100%">
	<div style="height: 18%; background-color: green">
		<!-- Header -->
		<?php include("../header/header.php");?>
		<!-- fin header -->
	</div>
	<div style="height: 71%;">
	<div class="event_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-sm-1">
						<img src="../../../img/web/icon/png/premis-nom.png">
						
					</div>
				</div>
			</div>
		</div>
	</div>
		
		
		EcoPremis
		Filtro: <select name="filtro" onchange="enviarDatos(this.value);">
				<option value="1">-+</option>
				<option value="2">+-</option>
		</select>
		<div id="tabla"></div>
	</div>
	<div style="height: 11%; background-color: #218221;">
		<!-- Footer -->
		<?php include("../footer/footer.php");?>
		<!-- fin footer -->
	</div>
</div>
</body>
</html>