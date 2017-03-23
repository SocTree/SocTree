<?php session_start();

//Este include lo usaremos en las páginas que los NO usuarios puedan ver el contenido.
//Deja una variable "$usu", en la vista pondremos un if comprobando si la variable $usu está seteada
//Si no lo está en vez de darle las opciones de usuarios les mostraremos la variable $msgNoUsuarios.
if (isset($_SESSION['usu_id'])) {
	$usu = $_SESSION['usu_id'];
	$nom = $_SESSION['usu_nom'];
	$cognom = $_SESSION['usu_cognom'];

}else{
	$msgNoUsuarios = "Per participar <a href='login.php'>fes login </a> o <a href='registrate.php'>registra't.</a>";
}
 ?>
