<!DOCTYPE html>
<html>
  <head>


      <style type="text/css">
     
      #map { height: 359px;  }
    </style>
  <?php 
  if (file_exists('../head.php')) {
          include '..//head.php';
        }else{
          include 'php/main/head.php';
        }


  //include("../main/head.php");?>
  </head>
  <body>
  <?php

  if (file_exists('../header/header.php')) {
          include '../header/header.php';
        }else{
          include 'php/main/header/header.php';
        }
  
   //include("../main/header/header.php");?>

   <div style ="margin-top: 137px">
    <div class="jumbotron">

    <div class="col-md-3">

 
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">Afegir punt d'interes</button>
     <label>Vols filtrar els punts d'interés?</label><select  id="filtro" name="tipo_marcador"  onchange="initMap()">
    <option class="dropdown-menu" value='0'> Res</option>
      <?php include("select_dinamico_bd.php"); ?>

        </select>
    </div>

    <div id="map"></div>
    
   
    </div>
  
 

    <script type="text/javascript">
        var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 41.3495464, lng: 2.1076887},
            //mapTypeId: google.maps.MapTypeId.SATELLITE,
            mapTypeId:google.maps.MapTypeId.SATELLITE,
            zoom: 10
          });
          cargaContenido();
        }

        var READY_STATE_UNINITIALIZED=0;
        var READY_STATE_LOADING=1;
        var READY_STATE_LOADED=2;
        var READY_STATE_INTERACTIVE=3;
        var READY_STATE_COMPLETE=4;

        var peticion_http,datosCargados;

        function inicializa_xhr() {
          if(window.XMLHttpRequest) {
            return new XMLHttpRequest();
          }
          else if(window.ActiveXObject) {
            return new ActiveXObject("Microsoft.XMLHTTP");
          }
        }

        function cargaContenido() {
          peticion_http = inicializa_xhr();
          if(peticion_http) {
            peticion_http.onreadystatechange = muestraContenido;
            //para el filtro según la opción que este seleccionada del desplegable se hará la peticion ajax correspondiente
            
            var valor = document.getElementById("filtro").value
            
          //alert(valor);
           switch(valor) {
                                case valor:
                                    peticion_http.open("GET", "datos.php"+"?valor="+valor, true);
                                    break;                                
                              default:
                                    peticion_http.open("GET", "datos.php"+"?"+0+"=valor", true);
                                    break;
                                
            }

            //peticion_http.open("GET", "datos.php", true);
            peticion_http.send(null);
          }
        }

        function muestraContenido() {
          if(peticion_http.readyState == READY_STATE_COMPLETE) {
            if(peticion_http.status == 200) {
              //alert(peticion_http.responseText);
              ///creamos los markers
              var datosCargados=JSON.parse(peticion_http.responseText);

              for(var i=0;i<datosCargados.marcadores.length;i++){
                var myLatLng = {lat: datosCargados.marcadores[i].posicion.lat, lng: datosCargados.marcadores[i].posicion.lng};
                var marker = new google.maps.Marker({
                  map: map,
                  position: myLatLng,
                  opacity:1,
                  animation:google.maps.Animation.DROP,  //DROP, BOUNCE
                  title: datosCargados.marcadores[i].nombre
                });
                var contentString;
                var infowindow = new google.maps.InfoWindow();

                google.maps.event.addListener(marker,'click', (function(marker,i) {
                  return function() {
                    contentString = '<div id="content">'+
                        '<p>Tipo de punto de interes: '+datosCargados.marcadores[i].tipo+'"<br> "Nombre del punto: '+datosCargados.marcadores[i].nombre+'"</p><br><p> Usuario que lo ha creado: '+datosCargados.marcadores[i].usuario+'</p><br><p> Descripcion: '+datosCargados.marcadores[i].descripcion+'"</p>';
                        '</div>';
                    infowindow.setContent(contentString);
                    infowindow.open(map, marker);
                  }

                })(marker,i));
              }
            }
          }
        }

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhXaF13fF5Exi4nzqVZ_PD1q9bO_O8Y_M&callback=initMap">
    </script>

      <div class="modal fade" id="modal-1" role="dialog"><?php include_once("view_eric_agregarPuntoInteres.php"); ?></div> 
<?php include("../footer/footer.php") ?>
