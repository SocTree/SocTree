<?php include "../../conexio/conexio.php"; ?>
<div class="menufijo">
 	<div class="container">	
	<div class="row">
	<br/>	
		<div class="col-sm-5">
			<?php 
			if (file_exists('img/web/logo/gif.gif')) {
					echo "<a href='index.php'><img src='img/web/logo/gif.gif' width='200'></a>";
				}else{
					echo "<a href='../../../index.php'><img src='../../../img/web/logo/gif.gif' width='200'></a>";
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
					echo "<div class='dropdown' style='float:left; cursor:pointer'>";
					echo "<a class='dropdown-toggle' data-toggle='dropdown' type='button'>";
					echo $nom;
					echo  ' '. $cognom .'<span class="caret"></span></a>&nbsp;&nbsp;|&nbsp;&nbsp;'; 
					?>
					<ul class="dropdown-menu">
							      <li><a href= <?php if (file_exists('perfil.php')) {
							      	echo "'perfil.php'";
							      } else{
							      	echo "'php/main/body/perfil.php'";
							      } 
							      ?> >El meu perfil</a></li>
							      <li><a href= <?php if (file_exists('events_usuari.php')) {
							      	echo "'events_usuari.php'";
							      } else{
							      	echo "'php/main/body/events_usuari.php'";
							      } 
							      ?> >Els meus events</a></li>
							    </ul>
							    </div>
					<a href=<?php 
					if (file_exists('php/main/body/ecopremis.php')) {
						echo "'php/main/body/ecopremis.php'";
						}else{
							echo  "ecopremis.php";}
					  ?>>
					  <?php 
					  		$sql = "SELECT mon_quantitat FROM tbl_moneder WHERE usu_id = $usu";
					  		$monedas = mysqli_query($conexion, $sql);
					  		while ($moneda = mysqli_fetch_object($monedas)) {
					  			echo $moneda->mon_quantitat." ";
					  		}
					  ?><i class="fa fa-trophy fa-lg" aria-hidden="true"></i></a>
			

			<!-- href=<?php 
					// if (file_exists('php/main/body/events_usuari2.php')) {
					// 	echo "'php/main/body/events_usuari2.php'";
					// 	}else{
					// 		echo  "events_usuari2.php";}
					  ?> -->		  
					 <!--  &nbsp;&nbsp; --><!-- <div class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" type="button"><i class="fa fa-user fa-lg" aria-hidden="true"></i><span class="caret"></span></a>
							    <ul class="dropdown-menu">
							      <li><a href="#">El meu perfil</a></li>
							      <li><a href="#">Els meus events</a></li>
							    </ul>
						</div> -->



					  &nbsp;&nbsp;
					<a href= <?php 
					if (file_exists('../../proc/destroysesion.proc.php')) {
						echo "'../../proc/destroysesion.proc.php'";
						}else{
							echo  "'php/proc/destroysesion.proc.php'";}
					  ?> ><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a>
				<?php 
				}else{ ?>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1" style="width: 120px">Inicia sessió</button>
		        				
					<?php }
					?>
				</div>
							
			</div>
			<div class="col-sm-12">
					<a href="#Blog"><div class="menu">Blog</div></a>
					<a href=<?php 
					if (file_exists('php/main/body/ecopremis.php')) {
						echo "'php/main/body/ecopremis.php'";
						}else{
							echo  "'ecopremis.php'";}
					  ?>><div class="menu">Premis</div></a>
					<a href=<?php 
					if (file_exists('php/main/body/eventos.php')) {
						echo "'php/main/body/eventos.php'";
						}else{
							echo  "'eventos.php'";}
					  ?>><div class="menu">Events</div></a>
					<a href="#Llocsdinteres"><div class="menu">Llocs d'Interès</div></a>		
			</div>				
		</div>
	</div>
</div>
</div>
	<div class="modal fade" id="modal-1" role="dialog"><?php if (file_exists("php/main/body/login2.php")) {
		include_once("php/main/body/login2.php");
	} else {
		include_once("login2.php");
		}?></div>	
</br>