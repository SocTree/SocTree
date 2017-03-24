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
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<!-- PARTE DEL HEAD RELATIVA AL SLIDE -->
	<link rel="stylesheet" href="css/slider.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<style>.flex-container{position: relative;margin: 0 auto; top: 0%; padding: 50px;} </style> 
</head>
<body>
<!-- <div style="position: fixed;width: 100%;top: 0;background-color: white;z-index: 1000"> -->
<div class="container">	
	<div class="row">
	<br/>
		<div class="col-sm-5">
			<img src="img/web/logo/gif.gif" width="200">
		</div>
		<div class="col-sm-7">
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
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">Inicia sessió</button>
		        <div class="modal fade" id="modal-1" role="dialog"><?php include_once("php/main/body/login2.php"); ?></div>					
					<?php }
					?>
				</div>
				<div class="col-sm-12">
				<a href="#Blog"><div class="menu">Blog</div></a>
				<a href="#Premis"><div class="menu">Premis</div></a>
				<a href="#Events"><div class="menu">Events</div></a>
				<a href="#Llocsdinteres"><div class="menu">Llocs d'Interès</div></a>		
			</div>				
			</div>
			
		</div>
	</div>
</div>
</div>
</br>
