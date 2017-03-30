<?php
	include '../../conexio/conexio.php';
	// include '../header/header.php' ;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				 
				  ajax.open("POST", 'filtro_eventos.php', true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('total').innerHTML = ajax.responseText;
					}
				  }
  				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send("val="+val);
				}

		 window.onload = enviarDatos(0);	
	</script>
</head>
<body>

<!-- Header -->
<?php include("../header/header.php");?>
<!-- fin header -->

<div class="contenido_index event_main">
	<!-- Este es el divisor verde superior -->
	<div class="row">
		<div class="col-md-12 ">
			<div class="col-md-6">
				<img src="../../../img/web/icon/png/event-nom.png">
			</div>
			<div class="col-md-6">
			
				<a href="agregarEvento1.php" class="menu_boton btn btn-succes" >Crea un Event</a>
				<!-- <a href="#" class="menu_boton btn btn-succes" data-toggle="modal" data-target="#myModal1">Crea un Event</a>
				<div class="modal fade" id="myModal1" role="dialog">
					<?php //include("agregarEvento.php"); ?>
					
				</div> -->
			</div>
		</div>
	</div>
</div>
	<!-- Fin divisor verde superior -->

	<div class="row">
		<div class="col-md-12 text-center iconos_eventos">
			<label class="col-md-2">
				<img src="../../../img/events/loupe.png">
				Tots<input type="radio" name="tipo" value="0" onchange="enviarDatos(this.value)">
			</label>
			<label class="col-md-2">
				<img src="../../../img/events/sport.png">
				Esport<input type="radio" name="tipo" value="1" onchange="enviarDatos(this.value)">
			</label>
			<label class="col-md-2">
				<img src="../../../img/events/stew-3.png">
				Gastronomic<input type="radio" name="tipo" value="2" onchange="enviarDatos(this.value)">
			</label class="col-md-2">
			<label>
				<img src="../../../img/events/recycle.png">
				4R<input type="radio" name="tipo" value="3" onchange="enviarDatos(this.value)">
			</label>
			<label class="col-md-2">
				<img src="../../../img/events/drawing.png">
				Diy<input type="radio" name="tipo" value="4" onchange="enviarDatos(this.value)">
			</label>
			<label class="col-md-2">
				<img src="../../../img/events/charity.png">
				Solidari<input type="radio" name="tipo" value="5" onchange="enviarDatos(this.value)">
			</label>
						
		</div>
	</div>
	<div class="container">
		<div class="row eventos">
			<div class="col-md-12" id="total">
				
			</div>
		</div>
	</div>
<!-- verEventos
<?php //include("verEventos.php");?>
fin verEventos -->

<!-- Footer -->
<?php include("../footer/footer.php");?>
<!-- fin footer -->
</body>
</html>