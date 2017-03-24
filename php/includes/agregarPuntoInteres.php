<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>




<body>
 

<?php

//cuando esten las sesiones  funcionando se cambiara este valor por el de la sesion
$usu_id = 1;
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
echo"<input type='hidden' name='usu_id' value=".$usu_id.">";
?>
 <textarea name="marc_descripcio" rows="5" cols="60" placeholder="descripcio del punt d'interes"></textarea> 
<br>
 <input type="submit" value="enviar">
</form>

o si estas al lloc <button onclick="getLocation()">Geolocalizame</button>
 

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


</body>
</html>
