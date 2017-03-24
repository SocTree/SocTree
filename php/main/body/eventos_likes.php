<?php 
include '../../conexio/conexio.php';

extract($_REQUEST);


//LIKES
		$sql = "SELECT + FROM `tbl_usuari` INNER JOIN `tbl_inter_event` ON `tbl_usuari`.`usu_id` = `tbl_inter_event`.`usu_id` WHERE `tbl_inter_event`.`eve_id` = $eve_id";
		$verLikes = mysqli_query($conexion,$sql);
		if (mysqli_num_rows($verLikes)) {
			$likes=0;
			$dislikes=0;
			$haVotado=0;
			while ($votaciones = mysqli_fetch_array($verLikes)) {
				if ($votaciones['usu_id'] == $_SESSION['usu_id'] && $haVotado == 0) {
					if ($votaciones['inter_eve_magrada'] == 1) {
						$likes++;
						$haVotado = 1;
					}
					if ($votaciones['inter_eve_magrada'] == 2) {
						$dislikes++;
						$haVotado = 2;
					}
				}else{
					if ($votaciones['inter_eve_magrada'] == 1) {
						$likes++;
					}
					if ($votaciones['inter_eve_magrada'] == 2) {
						$dislikes++;
					}
					
				}
			}
		}
?>