<?php
ob_start();
if (file_exists('../../includes/visualizarPermisivo.php')) {//esto nos dejará el id del usuario en la variable $usu
					include_once '../../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
	 ?>
<?php 
include "../../conexio/conexio.php";
 ?>
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
<!-- <div style="height: 100%"> -->
	<!-- <div style="height: 15%;"> -->
		<!-- Header -->
		<?php include("../header/header.php");?>
		<!-- fin header -->
	<!-- </div> -->
	<!-- <div style="height: 71%;"> -->
	<div class="contenido_index event_main" style="overflow-x: hidden">
		<div class="row">
			<div class="col-md-6">
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../img/web/icon/png/premis-nom.png">	
			</div>
			<div class="col-sm-4">
				<div style="float: right;">
					<b style="font-size: 20px">Ordenar:</b>
				</div>
			</div>
			<div class="col-sm-2">		 
				<select id="filtro" name="filtro" onchange="enviarDatos(this.value);" class="form-control" style="width:200px;">
					<option value="1">De menys a més ▲</option>
					<option value="2">De més a menys ▼</option>
				</select>			
			</div>
		</div>
	</div>
	<div class="container" style="margin-bottom: 2%; margin-top: 2%">
		
		<div id="tabla" ></div>
	</div>	
		
		
	<!-- </div> -->
	<!-- <div style="height: 11%; background-color: #218221;"> -->
		<!-- Footer -->
		<?php include("../footer/footer.php");?>
		<!-- fin footer -->
	<!-- </div> -->
<!-- </div> -->
</body>
</html>