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
<form name="crear_punt_interes" action="./proc/agregar_punto_interes.proc.php">

  <input type="text" name="marc_nom_lloc" placeholder="nom del punt d'interés">
  <input type="text" name="marc_adreca" placeholder="adreça del punt d'interes">
  <select name="tip_marc_tipus"  >
              
  <?php include("select_dinamico_bd.php"); ?>
  </select>
  <br>
<?php 
echo"<input type='hidden' name='usu_id' value=".$usu_id.">";
?>
 <textarea name="marc_descripcio" rows="5" cols="60" placeholder="descripcio del punt d'interes"></textarea> 
<br>
 <input type="submit" value="enviar">
</form>

</body>
</html>