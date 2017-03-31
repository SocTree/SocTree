<?php
if (file_exists('../../includes/visualizarPermisivo.php')) {//esto nos dejará el id del usuario en la variable $usu
					include_once '../../includes/visualizarPermisivo.php';
				}else{
					include_once 'php/includes/visualizarPermisivo.php';
				}
	 ?>
?><?php 
//Pagina de visualitzacio i modificacio del usuari
//Mediante ajax puedes accerder a modificar usuario o a cambiar conntraseña
//Se validan ambos formulario y si todo esta correcto va cada pagina a su resectivo .proc.php
//Si hay error lo muestra en el div respuesta-consulta o en el caso de cambio de contraseña muestra si la contraseña se ha modificado correctamente
include '../../conexio/conexio.php';
extract($_REQUEST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>El meu perfil</title>
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
<div style="height: 17%;width: 100%">
<!-- Header -->
<?php include("../header/header.php");?>
<!-- fin header -->	
</div>
<div style="height: 69.6%; background-color: #caf1ca; width: 100%">
	<div class="contenido_index event_main" style="margin-top: 0px">
		<div class="row">
			<div class="col-md-12 ">
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../img/web/icon/png/perfil-nom.png">
			</div>
		</div>
	</div>
	<div class="col-sm-12" style="margin-top:2%; text-align: center;">
		<div id="respuesta-consulta"> 
			<?php 
				if(isset($err)){
					if ($err == 1){
						echo "<p style='color:red'>Error: el correu introduït ja existeix</p>";
					} elseif ($err == 1){
						echo "<p style='color:red'>Error al canviar la contrasenya</p>";
					}
				}

				if (isset($corr)){
					if($corr==1){
						echo "<p style='color:green'>Contrasenya modificada correctament</p>";
					}
				}
			?>
		</div>
	</div>
	<div class="col-sm-offset-3 col-sm-6" style="background-color: white; padding: 2%; 	border: 5px groove #33cc33;">
		<div id="info-usu"></div>
	</div>		
</div>
<!-- Footer -->
<?php include("../footer/footer.php");?>
<!-- fin footer -->		
</body>
</html>