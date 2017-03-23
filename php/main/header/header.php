<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- PARTE DEL HEAD RELATIVA AL HEADER -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<!-- PARTE DEL HEAD RELATIVA AL SLIDE -->
	<link rel="stylesheet" href="css/slider.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<style>.flex-container{position: relative;margin: 0 auto; top: 0%; padding: 50px;} </style> 
</head>
<body>
<div class="container">
<header>	
	<div class="row">
	<br/>
		<div class="col-sm-5 col-xs-4">
			<img src="img/web/logo/gif.gif" width="200">
		</div>
		<div class="col-sm-7 col-xs-8">
			<div class="col-sm-offset-4 col-sm-8">
				<div class="nombre">
				<?php  
				if (file_exists('../../includes/visualizarPermisivo.php')) {
					include '../../includes/visualizarPermisivo.php';
				}else{
					include 'php/includes/visualizarPermisivo.php';
				}
				

				if (isset($usu))  {
					echo "<a href=''>";
					echo $nom;
					echo  ', '. $cognom .'</a>&nbsp;&nbsp;|&nbsp;&nbsp;'; 
					?>

					<a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>&nbsp;&nbsp;
					<a href="#"><i class="fa fa-user fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;
					<a href='php/proc/destroysesion.proc.php' ><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a>

				<?php 
				}else{ ?>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalLogin">Inicia sesio</button>
		        <div class="modal fade" id="ModalLogin" role="dialog"><?php include_once("php/main/body/login.php"); ?></div>
		           
					
					<?php }
					?>

					 
					
				</div>				
			</div>
			<div class="col-sm-12">
				<a href="#Blog"><div class="menu">Blog</div></a>
				<a href="#Premis"><div class="menu">Premis</div></a>
				<a href="#Events"><div class="menu">Events</div></a>
				<a href="#Llocsdinteres"><div class="menu">Llocs d'Interès</div></a>		
			</div>
		</div>
	</div>	
</header>
</br>
