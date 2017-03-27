<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<!-- Modal Login #modal1 -->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Agregar punt d'interes</h4>
      </div>
      <div class="modal-body">
        
    
            <input type="password" placeholder="Password" class="form-control" name="password"><bR>
        <input type="text" placeholder="Email" class="form-control" name="email"><bR>



<?php

//cuando esten las sesiones  funcionando se cambiara este valor por el de la sesion
//$usu_id = 1;
  
        if (file_exists('../../includes/visualizarPermisivo.php')) {
          include '../../includes/visualizarPermisivo.php';
        }else{
          include 'php/includes/visualizarPermisivo.php';
        }

?>
<form name="crear_punt_interes" action="../proc/agregar_punto_interes.proc.php">

  <input type="text" name="marc_nom_lloc" placeholder="nom del punt d'interés">
  <select name="ico_id"  >
   <option value=''>Selecciona tipus marcador</option>           
  <?php include("select_dinamico_bd.php"); ?>

  </select>

  <input type="text" id="marc_adreca"  name="marc_adreca" placeholder="adreça del punt d'interes"> <br> <input type="text" id="latitud"  name="latitud" > 
<input type="text" id="longitud"  name="longitud"  >
<?php 
echo"<input type='hidden' name='usu_id' value=".$usu.">";
?>
 <textarea name="marc_descripcio" rows="5" cols="60" placeholder="descripcio del punt d'interes"></textarea> 
<br>



 

<script>
var x = document.getElementById("latitud");
var y = document.getElementById("longitud");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";

    }
}

function showPosition(position) {

  //ej{lat: 41.3495464, lng: 2.1076887}
    x.value = '"lat": '+ position.coords.latitude;
    y.value = '"lng": '+ position.coords.longitude;
    document.getElementById("marc_adreca").value = "";
    document.getElementById("marc_adreca").disabled = 'true' ;
}
</script>

      </div>
      <div class="modal-footer">
  <div class="col-md-2" style="float: right;">


      <input type="submit" class="btn btn-success" name="enviar"> </div>
</form>        


  <div class="col-md-2">
     <button class="btn btn-success" onclick="getLocation()">Geolocalizame</button></div> 
       <div class="col-md-2">
  <blockquote> *rebeu la vostra localització</blockquote> </div> 
  
      </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  