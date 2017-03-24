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