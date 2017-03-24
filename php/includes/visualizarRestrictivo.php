<?php session_start();

//Este include lo usaremos en las páginas que los NO usuarios no puedan ver el contenido.
//Deja una variable "$usu", en el caso que el usuario se haya logueado 
//Si no se ha logueado le redirigimos al index con un mensaje de error
if (isset($_SESSION['usu_id'])) {
	$usu = $_SESSION['usu_id'];
}else{
	header('location:../../../index.php?err=1');
}
 ?>
