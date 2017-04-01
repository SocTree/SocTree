<?php
        if (file_exists('../../includes/visualizarPermisivo.php')) {
          include_once '../../includes/visualizarPermisivo.php';
        }else{
          include_once 'php/includes/visualizarPermisivo.php';
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="modal-dialog modal-lg">
    <div class="modal-content">
     	<div class="modal-header">
     		<button type="button" class="close" data-dismiss="modal">
        	<span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        	<h4 class="modal-title">Afegir event</h4>
     	</div>
     	<div class="modal-body">
     		<?php 
     			if (!isset($usu)) {
     				echo "<strong><h3>Inicia sessió per afegir un event!</h3></strong>";
     			}
     		 ?>
     	</div>	
</body>
</html>