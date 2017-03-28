<?php 
session_start();
//Esta pagina es para echar a los usuarios que entren en los procs

if (isset($_SESSION['usu_id'])) {
	$usu = $_SESSION['usu_id'];
}else{
	header('location:../../index.php');
}
?>