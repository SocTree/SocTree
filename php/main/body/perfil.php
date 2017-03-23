<?php 
//Pagina de visualitzacio i modificacio del usuari
include '../../includes/visualizarRestrictivo.php';
extract($_REQUEST);

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


				function validarForm(){
					
					var msg = "Error:";

					var form = document.getElementById('form');

					if ((form.usu_foto.value.indexOf("png")==-1) && (form.usu_foto.value.indexOf("jpg")==-1) && (form.usu_foto.value != "")) {
						msg += "\n Extensio de la foto no vàlida (PNG/JPG)";
					}

					if(form.usu_nom.value == ""){
						msg += "\n El nom no pot estar buit";
						form.usu_nom.style.borderColor="red";
					}

					if(form.usu_cognom.value == ""){
						msg += "\n El cognom no pot estar buit";
						form.usu_cognom.style.borderColor="red";
					}

					if(form.usu_email.value == ""){
						msg += "\n El correu no pot estar buit";
						form.usu_email.style.borderColor="red";
					} 

					 /*if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(form.usu_email.value))){
						alert("--"+form.usu_email.value+"--")
						msg += "\n El format del correu no es vàlid";
						form.usu_email.style.borderColor="red";
					}*/
					
					if (msg != "Error:"){
						alert(msg);
						return false;
					} else {
						enviarDatos();
						return true;
					}
				}

		function validarPass(){

			var form = document.getElementById('pass');

			var msg = "Error:";

			if(form.usu_password.value == ""){
				msg += "\n La contrasenya no pot estar buida";
						form.usu_password.style.borderColor="red";
			}
			if(form.usu_nova_pass.value == ""){
				msg += "\n La nova contrasenya no pot estar buida";
						form.usu_nova_pass.style.borderColor="red";
			}
			if(form.usu_rep_nova.value == ""){
				msg += "\n Has de repetir la nova contrasenya";
						form.usu_rep_nova.style.borderColor="red";
			}

			if (form.usu_rep_nova.value != form.usu_nova_pass.value){
				msg += "\n Les contrasenyes han de coincidir";
						form.usu_rep_nova.style.borderColor="red";
						form.usu_nova_pass.style.borderColor="red";
			}

			if (msg != "Error:"){
						alert(msg);
						return false;
					} else {
						return true;
					}

		}


		window.onload = enviarDatos('usuario_perfil.php'); 


	</script>
</head>
<body>
	<div id="respuesta-consulta"> 
		<?php 
			if(isset($err)){
				if ($err == 1){
					echo "Error: el correu introduït ja existeix";
				} elseif ($err == 1){
					echo "Error al canviar la contrasenya";
				}
			}

			if (isset($corr)){
				if($corr==1){
					echo "contrasenya modificada correctament";
				}
			}
		?>
	</div>
	<div id="info-usu"></div>
</body>
</html>