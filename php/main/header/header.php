
<div class="menufijo">
 	<div class="container">	
	<div class="row">
	<br/>
		<div class="col-sm-5">
			<?php 
			if (file_exists('img/web/logo/gif.gif')) {
					echo "<img src='img/web/logo/gif.gif' width='200'>";
				}else{
					echo "<img src='../../../img/web/logo/gif.gif' width='200'>";
				}
			?>
		</div>
		<div class="col-sm-7 ">
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
					<a href= <?php 
					if (file_exists('../../proc/destroysesion.proc.php')) {
						echo "'../../proc/destroysesion.proc.php'";
						}else{
							echo  "'php/proc/destroysesion.proc.php'";}
					  ?> ><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a>
				<?php 
				}else{ ?>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">Inicia sessió</button>
		        				
					<?php }
					?>
				</div>
							
			</div>
			<div class="col-sm-12">
					<a href="#Blog"><div class="menu">Blog</div></a>
					<a href="#Premis"><div class="menu">Premis</div></a>
					<a href="#Events"><div class="menu">Events</div></a>
					<a href="../body/visualizarPuntosInteres.php"><div class="menu">Llocs d'Interès</div></a>		
			</div>	
			
		</div>
	</div>
</div>
</div>
	<div class="modal fade" id="modal-1" role="dialog"><?php include_once("php/main/body/login2.php"); ?></div>	


</br>
