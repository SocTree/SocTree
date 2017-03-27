<?php session_start();
include '../../conexio/conexio.php';

extract($_REQUEST);

//LIKES
		$sql = "SELECT * FROM `tbl_usuari` INNER JOIN `tbl_inter_event` ON `tbl_usuari`.`usu_id` = `tbl_inter_event`.`usu_id` WHERE `tbl_inter_event`.`eve_id` = '".$eve_id."'";
		
		$verLikes = mysqli_query($conexion,$sql);
		if (mysqli_num_rows($verLikes)) {
			$likes=0;
			$dislikes=0;
			$haVotado=0;
			$contador = 0;
			while ($votaciones = mysqli_fetch_array($verLikes)) {
				if ($votaciones['usu_id'] == isset($_SESSION['usu_id']) && $haVotado == 0) {
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
					}else {
						$dislikes++;
					}
				}
				$contador++;
			}

			echo "
			Número de likes: $likes <br>
			Número de dislikes: $dislikes. ";
			if ($haVotado != 0) {
				if ($haVotado == 1) {
					echo "<br>Has votado like.<input type='radio' name='namelike' id='radioLike' onChange='votar(1)' checked>like <br>
					<input type='radio' name='namelike' id='radioDislike' onChange='votar(2)'>dislike";
				}else{
					echo "<br><input type='radio' name='namelike' id='radioLike' onChange='votar(1)'>like <br>
					Has votado dislike.<input type='radio' name='namelike' id='radioDislike' onChange='votar(2)' checked>dislike";
				}
			}elseif (isset($_SESSION['usu_id'])) {
					echo "<br><input type='radio' name='namelike' id='radioLike' onChange='votar(1)'>like <br>
					<input type='radio' name='namelike' id='radioDislike' onChange='votar(2)'>dislike";
				}
		}
?>