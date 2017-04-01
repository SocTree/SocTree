<?php
        if (file_exists('../../includes/visualizarPermisivo.php')) {
          include_once '../../includes/visualizarPermisivo.php';
        }else{
          include_once 'php/includes/visualizarPermisivo.php';
        }
?>
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
          <?php
            //cuando esten las sesiones  funcionando se cambiara este valor por el de la sesion
          if (isset($usu)) {
?>
<div class="col-md-12">

    <form name="crear_punt_interes" action="../../proc/agregar_punto_interes.proc.php">
    <div class="col-md-3">
      <input type="text" name="marc_nom_lloc" class="form-control" placeholder="nom del punt d'interés"><br>
    </div>
    <div class="col-md-4"> <select class="form-control"  name="ico_id"  >
       <option value=''>Selecciona tipus marcador</option>           
      <?php include("select_dinamico_bd.php"); ?>

      </select><br>   
        </div>
    <div class="col-md-3">
      <input class="form-control"  type="text" id="marc_adreca"  name="marc_adreca" placeholder="adreça del punt d'interes"> 
    </div> 
</div>
<?php 
echo"<input type='hidden' name='usu_id' value=".$usu.">";
?>
<div class="col-md-12"> 
  <div class="col-md-2"> 
     <input class="form-control"  type="text" id="latitud"  name="latitud" >
  </div> 
  <div class="col-md-2"> 
     <input class="form-control"  type="text" id="longitud"  name="longitud" > <br>
  </div>

</div>

 <textarea class="form-control" name="marc_descripcio" rows="5" cols="60" placeholder="descripcio del punt d'interes" wrap="off" ></textarea> 
  <br>



      <div class="modal-footer">
  <div class="col-md-2" style="float: right;">


      <input type="submit" class="btn btn-success" name="enviar"> </div>
</form>        


  <div class="col-md-2">
     <button class="btn btn-success" onclick="getLocation()">Geolocalizame</button></div> 
       <div class="col-md-3">
 *rebeu la vostra localització </div> 
 <?php 
}
 else{?>

 <strong><h3>Inicia sessió per afegir una localització!</h3></strong>

 <i><a href="../../../index.php">Fes clic per tornar a l'inici per iniciar sessió</a></i>



     <?php } ?>
        </div>
      </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
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