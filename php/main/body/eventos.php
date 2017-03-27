<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("../head.php");?>
	<link rel="stylesheet" type="text/css" href="../../../css/eventos.css">
</head>
<body>
<!-- Header -->
<?php include("../header/header.php");?>
<!-- fin header -->
<div class="contenido_index">
	<!-- Este es el divisor verde superior -->
	<div class="row">
		<div class="col-md-12 event_main">
			<div class="col-md-6">
				<div class=""></div>
				<img src="../../../img/web/icon/png/event-nom.png">
			</div>
			<div class="col-md-6">
				<button class="menu_boton btn btn-succes" data-toggle="modal" data-target="#myModal">Crea un Event</button>
				<div class="modal fade" id="myModal" role="dialog"><?php include_once("agregarEvento.php"); ?></div>
			</div>
		</div>
	</div>
	<!-- Fin divisor verde superior -->
	<div class="row">
		<div class="col-md-12">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien leo. Nulla eget nunc rutrum, dictum sem nec, facilisis est. Nam dictum massa eget tortor venenatis, id ultricies massa finibus. Cras vulputate dignissim turpis, imperdiet venenatis erat dignissim vitae. Phasellus sit amet arcu at magna finibus imperdiet. Cras finibus molestie dolor ac imperdiet. Pellentesque ultricies ipsum et consectetur consequat. Pellentesque molestie tempor sapien, eu fermentum libero suscipit at. Donec vestibulum faucibus ex, quis gravida massa porta consectetur. Praesent et fringilla mi, eu elementum ipsum. Nam sit amet hendrerit enim. Aliquam erat volutpat.</p>

		<p>Donec nunc odio, vulputate a elit ullamcorper, gravida hendrerit tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sed justo ac nisi dignissim fringilla. Integer tincidunt tellus vitae nibh vehicula, vitae mattis nulla lobortis. Aenean volutpat quam ac diam mollis egestas. Aliquam at elit facilisis, hendrerit lectus ac, auctor dolor. Aenean interdum sollicitudin augue at lacinia. Nam ut sagittis est.</p>
		</div>
		
	</div>
<!-- verEventos
<?php //include("verEventos.php");?>
fin verEventos -->

<!-- Footer -->
<?php include("../footer/footer.php");?>
<!-- fin footer -->
</div>
</body>
</html>