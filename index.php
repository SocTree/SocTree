<!DOCTYPE html>
<html>
<head>
	<title>SocTree</title>
	<!-- PARTE DEL HEAD RELATIVA AL HEADER -->
	<!-- <link rel="icon" type="image/png" href="img/web/icon.png" /> -->
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

<!-- Header -->
<?php include("php/main/header/header.php");?>
<!-- fin header -->
<div style="margin-top: 132px;">
<div class="container">
<!-- Inicio slider -->
<div class="jumbotron">
	<div class="flex-container">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<a href="#"><img src="img/web/slider/slide1.jpg" /></a>
				</li>				
				<li>
					<img src="img/web/slider/slide2.jpg" />
				</li>				
				<li>
					<img src="img/web/slider/slide3.jpg" />
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- fin slider -->

<section class="info">
	<img src="img/web/logo/1.png" width="250"><p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio odio. Pellentesque bibendum libero ac cursus fermentum. Praesent non mi accumsan, fermentum tellus vitae, faucibus arcu. Suspendisse at vehicula ligula. Donec tempor velit dui, non molestie odio cursus ac."</i></p>	
</section>
<br>

<section class="jobs">
	<div class="col-sm-6">
		<div class="jobs-content">
			<img src="img/web/icon/png/geo.png">
			<h3>Llocs d'interès</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor turpis, condimentum id consectetur a, tristique in lorem. Ut posuere.</p>
		</div>	
	</div>
	
	<div class="col-sm-6">
		<div class="jobs-content">
			<img src="img/web/icon/png/event.png">
			<h3>Events</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor turpis, condimentum id consectetur a, tristique in lorem. Ut posuere.</p>
		</div>	
	</div>
	
	<div class="col-sm-6">
		<div class="jobs-content">
			<img src="img/web/icon/png/tips.png">
			<h3>Tips al Blog</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor turpis, condimentum id consectetur a, tristique in lorem. Ut posuere.</p>
		</div>	
	</div>
	
	<div class="col-sm-6">
		<div class="jobs-content">
			<img src="img/web/icon/png/premis.png">
			<h3>Premis pel medi</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor turpis, condimentum id consectetur a, tristique in lorem. Ut posuere.</p>
		</div>	
	</div>
</section>
<br>
</div>
<section class="patrocinadores">
	<div class="container">
		<h1>Som nosaltres gràcies a ...</h1>
		<br>
		<div class="row">
			<div class="col-sm-2 col-xs-4">
				<a href="http://www.aquabona.net/" id="logo-aquabona" target="_blank"></a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a href="http://www.fje.edu/en/fundacio/cetei/" id="logo-cetei" target="_blank"></a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a href="http://www.fje.edu/" id="logo-jesuites" target="_blank"></a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a href="https://www.ecosia.org/" id="logo-ecosia" target="_blank"></a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a href="http://ajuntament.barcelona.cat/es/" id="logo-ayun" target="_blank"></a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a href="http://www.arcadiadepapel.com//" id="logo-arcadia" target="_blank"></a>
			</div>
		</div>
	</div>
</section>
<br><br><br>
<section>
	<div class="container">
		<div class="foto">
			foto
		</div>
		<br><br>
		<table class="tabla">
			<tr>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Marc Petit</h4>
					<p style="font-size: 13px">Desenvolupament i Programació.</p>
				</td>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Roger Fuster</h4>
					<p style="font-size: 13px">Desenvolupament i Programació.</p>
				</td>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Miquel Gómez</h4>
					<p style="font-size: 13px">Desenvolupament, Programació i Enllaç amb els altres departaments.</p>
				</td>
			</tr>
			<tr>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Eric Petit</h4>
					<p style="font-size: 13px">Diseny i Desenvolupament.</p>
				</td>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Esther Rovira</h4>
					<p style="font-size: 13px">Maquetació, Diseny i Responsable de Comunicacions.</p>
				</td>
				<td class="us-foto"><img src="img/web/nosotros/base.png"></td>
				<td class="us-info">
					<h4>Edhu Chacaliaza</h4>
					<p style="font-size: 13px">Maquetació i Diseny.</p>
				</td>
			</tr>
		</table>	
	</div>	
</section>
<br><br><br>
<section class="patrocinadores">
	<h1>Segueix-nos<br><b style="color: #33cc33">#SocTree</b></h1>
	<br>
	<div class="container">
	<table class="tabla">
		<tr>
			<td class="us-foto">
				<a href="https://www.instagram.com/soctree.joan23/" target="_blank">
					<img src="img/web/icon/pngnegro/001-photo.png"><h4><b>soctree.joan23</b></h4>
				</a>		
			</td>
			<td class="us-foto">
				<a href="https://twitter.com/SocTreeJ23" target="_blank">
					<img src="img/web/icon/pngnegro/002-twitter-draw-logo.png"><h4><b>@SocTreeJ23</b></h4>
				</a>
			</td>
			<td class="us-foto">
				<a href="https://www.facebook.com/SocTree-617424871779909/?fref=ts" target="_blank">
					<img src="img/web/icon/pngnegro/003-facebook.png"><h4><b>SocTree</b></h4>
				</a>
			</td>
		</tr>
	</table>	
	</div>
	
</section>

<!-- <div class="container"> -->


	<!-- modal que se usará luego NO BORRAR!! -->
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
	<!-- <div class="modal fade" id="myModal" role="dialog"><?php //include_once("php/main/body/agregarEvento.php"); ?></div> -->
	<!-- fin de modal -->
<!-- cierra el div del container que esta en el header NO BORRAR!! -->
<!-- </div> -->
</div>	
<!-- termina el div del container -->
<script>
$(document).ready(function () {
	$('.flexslider').flexslider({
		animation: 'fade',
		controlsContainer: '.flexslider'
	});
});
</script>
<?php include("php/main/footer/footer.php") ?>
</body>
</html>
<style type="text/css">
a#logo-ecosia {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-ecosia-negro.png) no-repeat;
}
a#logo-ecosia:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-ecosia.png) no-repeat;
}
a#logo-arcadia {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-arcadiadepapel-negro.png) no-repeat;
}
a#logo-arcadia:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-arcadiadepapel.png) no-repeat;
}
a#logo-cetei {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-cetei-negro.png) no-repeat;
}
a#logo-cetei:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-cetei.png) no-repeat;
}
a#logo-jesuites {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-jesuites-negro.png) no-repeat;
}
a#logo-jesuites:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-jesuites.png) no-repeat;
}
a#logo-ayun {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-ayun-negro.png) no-repeat;
}
a#logo-ayun:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-ayun.png) no-repeat;
}
a#logo-fanta {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-fanta-negro.png) no-repeat;
}
a#logo-fanta:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-fanta.png) no-repeat;
}
a#logo-aquabona {
	display: block;
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-aquabona-negro.png) no-repeat;
}
a#logo-aquabona:hover {
	width: 150px;
	height: 150px;
	background:url(img/patrocinadors/logo-aquabona.png) no-repeat;
}
</style>