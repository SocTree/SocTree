
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- PARTE DEL HEAD RELATIVA AL HEADER -->
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../../css/header.css">
	<link rel="stylesheet" type="text/css" href="../../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../../css/body.css">
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
<div class="menufijo">
 	<div class="container">	
	<div class="row">
	<br/>	
		<div class="col-sm-5">
			<a href='../../../index.php'><img src='../../../img/web/logo/gif.gif' width='200'></a>		</div>
		<div class="col-sm-7 ">
			<div class="col-sm-offset-4 col-sm-8">
				<div class="nombre">
				<a href=''>prueba lalla alalal</a>&nbsp;&nbsp;|&nbsp;&nbsp;					<a href=ecopremis.php>
					  <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
					  
					  </a>&nbsp;&nbsp;
					<a href=events_usuari.php><i class="fa fa-user fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;
					<a href= '../../proc/destroysesion.proc.php' ><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a>
								</div>
							
			</div>
			<div class="col-sm-12">
					<a href="#Blog"><div class="menu">Blog</div></a>
					<a href='ecopremis.php'><div class="menu">Premis</div></a>
					<a href='eventos.php'><div class="menu">Events</div></a>
					<a href="#Llocsdinteres"><div class="menu">Llocs d'Interès</div></a>		
			</div>				
		</div>
	</div>
</div>
</div>
	<div class="modal fade" id="modal-1" role="dialog"><!-- Modal Login #modal1 -->
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        
			<form name="login" action='../../proc/login.proc.php' >



             <input type="text" placeholder="Email" class="form-control" name="email"><bR>   
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
             <input type="submit" class="btn btn-success" name="enviar"><bR>
		</form>
      </div>
      <div class="modal-footer">
        No tens compte,<a href="#modal-2" data-toggle="modal" data-dismiss="modal">registra't.</a> &nbsp;

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
  
  
  
  <!-- Modal Registre #modal -->
<div class="modal fade" id="modal-2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Registra't</h4>
      </div>
      <div class="modal-body">
    

        	<form action='../../proc/registrate.proc.php'>

	<input type="text" name="usu_nom" placeholder="Nom" class="form-control"><br>

	<input type="text" name="usu_cognom" placeholder="Cognoms" class="form-control"><br>
	
	<input type="email" name="usu_email" placeholder="Correu" class="form-control"><br>

	<input type="password" name="usu_password" placeholder="Contrasenya" class="form-control"><br>

	<input type="password" name="usu_password2" placeholder="Repetiu la contrasenya" class="form-control"><br>
	

       </form> 
  
        
      </div>
      <div class="modal-footer">
     Ya tens compte,<a href="#modal-1" data-toggle="modal" data-dismiss="modal">Inicia sessió.</a> &nbsp;
        <input type="submit" class="btn btn-success" name="enviar"><bR>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  </div>	
</br><!-- fin header -->

<div class="contenido_index event_main">
	<!-- Este es el divisor verde superior -->
	<div class="row">
		<div class="col-md-12 ">
			<div class="col-md-6">
				<img src="../../../img/web/icon/png/event-nom.png">
			</div>
			<div class="col-md-6">
				<a href="#" class="menu_boton btn btn-succes" data-toggle="modal" data-target="#myModal">Crea un Event</a>
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog modal-lg">
	<div class="modal-content color-modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 class="modal-title">Afegir Event</h4>
		</div>
		<div class="modal-body">
			
			<form name="anadirEvento" action="../../proc/agregarEvento.proc.php">
				Nom de l'event:
				<input type="textArea" name="eve_name"><br><br>
				Descripció:<br>
				<textarea name="eve_descripcio" maxlength="5000"></textarea><br><br>
				Tipus:
				<select name="eve_tipus">
				  <option value="esport">Esport</option>
				  <option value="gastronòmic">Gastronòmic</option>
				  <option value="3R">3R</option>
				  <option value="diy">DIY</option>
				  <option value="solidari" selected>Solidari</option>
				</select><br><br>
				Dia de l'event:
				<input type="date" name="eve_data"><br><br>
				Lloc:
				<input type="text" name="eve_localitzacio"><br><br>
				
				<!-- Aun no se si el estado lo controlamos nosotros o el dueño del evento. Lo pongo por si acaso -->
				
				Participants:
					<li>Mínim:<input type="number" name="eve_min_part"><br><br></li>
					<li>Màxim:<input type="number" name="eve_max_part"><br><br></li>
				<input type="submit" class="btn btn-success" name="enviar">
			</form>
		</div>
		<div class="modal-footer">
				
		</div>
	</div>
</div>					
				</div>
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
fin verEventos -->

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				&copy; 2017 SocTree, Inc. All rights reserved.
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/soctree.joan23/" target="_blank">
				<img src='../../../img/web/icon/png/002-instagram-draw-logo.png' >
				</a>			
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/SocTreeJ23" target="_blank">
				<img src='../../../img/web/icon/png/001-twitter-draw-logo.png' >
				</a>
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/SocTree-617424871779909/?fref=ts" target="_blank">
				<img src='../../../img/web/icon/png/003-facebook.png' >				</a>
			</div>
		</div>		
	</div>
</footer>
<!-- fin footer -->
</body>
</html>