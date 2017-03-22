<!-- Header -->
<?php include("php/main/header/header.php"); ?>
<!-- fin header -->
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
	<div class="jumbotron">
		<img src="img/socialmedia/fondo.jpg" style="width: 100%; ">
	</div>
	<!-- modal que se usará luego NO BORRAR!! -->
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
	<div class="modal fade" id="myModal" role="dialog"><?php include_once("php/main/body/agregarEvento.php"); ?></div>
	<!-- fin de modal -->
<!-- cierra el div del container que esta en el header NO BORRAR!! -->
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
</body>
</html>