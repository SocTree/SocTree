<!-- Header -->
<?php include("php/main/header/header.php");?>
<!-- fin header -->
<div style="margin-top: 132px; ">
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
	hola
</section>
<div class="container">


	<!-- modal que se usará luego NO BORRAR!! -->
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
	<div class="modal fade" id="myModal" role="dialog"><?php include_once("php/main/body/agregarEvento.php"); ?></div>
	<!-- fin de modal -->
<!-- cierra el div del container que esta en el header NO BORRAR!! -->
</div>
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