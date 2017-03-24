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
<h1>EcoPremis</h1>
Filtro: <select name="filtro" onchange="enviarDatos(this.value);">
		<option value="1">-+</option>
		<option value="2">+-</option>
</select>
<div id="tabla"></div>
</body>
</html>