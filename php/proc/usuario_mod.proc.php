<?php 
include '../conexio/conexio.php';
extract($_REQUEST);

$fichero = $_FILES['usu_foto']['name'];

					if ($fichero!=""){

					function generarCodigo($longitud) {
						 $key = '';
						 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
						 $max = strlen($pattern)-1;
						 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
						 return $key;
						}
 
//Ejemplo de uso
 
echo generarCodigo(6); // genera un código de 6 caracteres de longitud.
					$ext = strstr($fichero, '.'); 
					$fichero = "img_".$hora."_".$dia.$ext;
				
					if(!file_exists("./imagenes")){
						mkdir('./imagenes', 0777, true);
					} 

				move_uploaded_file($_FILES['imagen']['tmp_name'], "./imagenes/".$fichero);
?>