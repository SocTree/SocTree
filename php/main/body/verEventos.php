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

		 window.onload = enviarDatos(0);	
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


</div>
</body>
</html>