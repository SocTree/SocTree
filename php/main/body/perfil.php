<?php 
//Pagina de visualitzacio i modificacio del usuari
//include '../../includes/visualizarRestrictivo.php';

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

				function enviarDatos(url){
			
				  var ajax=objetoAjax();
				 
				  ajax.open("POST", url, true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('info-usu').innerHTML = ajax.responseText;
					}
				  }
  				ajax.send();
				}


		window.onload = enviarDatos('usuario_perfil.php'); 


	</script>
</head>
<body>
	<div id="info-usu"></div>
</body>
</html>