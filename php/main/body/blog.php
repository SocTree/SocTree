<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("../head.php");?>
	<link rel="stylesheet" type="text/css" href="../../../css/eventos.css">
</head>
<body>
<?php include("../header/header.php");?>
<!-- fin header -->
<div class="contenido_index">
	<!-- Este es el divisor verde superior -->
	<div class="row">
		<div class="col-md-12 event_main">
			<div class="col-md-6">
				<div class=""></div>
				<img src="../../../img/web/icon/png/tips-nom.png">
			</div>
			<div class="col-md-6">
				<p>aldsfasd</p>
			</div>
		</div>
	</div>

	<div class="contenedor">
			<?php foreach($posts as $post): ?>
				<div class="post">
					<article>
						<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
						<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
						<div class="thumb">
							<a href="single.php?id=<?php echo $post['id']; ?>">
								<img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
							</a>
						</div>
						<p class="extracto"><?php echo $post['extracto']; ?></p>
						<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
					</article>
				</div>
			<?php endforeach; ?>


		<?php require 'paginacion.php'; ?>
	</div>
<!-- Footer -->
<?php include("../footer/footer.php");?>
<!-- fin footer -->
</body>
</html>