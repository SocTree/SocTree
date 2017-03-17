<?php session_start();
extract($_REQUEST); //Recibimos $email i $password

include('./conexion/conexion.php');

//Encriptamos la password
$password = hash('sha512',$password);

$sql = "SELECT * FROM tbl_usuari WHERE usu_email = $email AND usu_password = $password;";

?>