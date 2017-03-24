<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				&copy; 2017 SocTree, Inc. All rights reserved.
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/soctree.joan23/" target="_blank">
				<?php 
					if (file_exists('img/web/icon/png/002-instagram-draw-logo.png')) {
						echo "<img src='img/web/icon/png/002-instagram-draw-logo.png'>";
					}else{
						echo "<img src='../../../img/web/icon/png/002-instagram-draw-logo.png' >";
					}
				?>

				</a>			
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/SocTreeJ23" target="_blank">
				<?php 
					if (file_exists('img/web/icon/png/001-twitter-draw-logo.png')) {
						echo "<img src='img/web/icon/png/001-twitter-draw-logo.png'>";
					}else{
						echo "<img src='../../../img/web/icon/png/001-twitter-draw-logo.png' >";
					}
				?>

				</a>
			</div>
			<div class="col-sm-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/SocTree-617424871779909/?fref=ts" target="_blank">
				<?php 
					if (file_exists('img/web/icon/png/003-facebook.png')) {
						echo "<img src='img/web/icon/png/003-facebook.png'>";
					}else{
						echo "<img src='../../../img/web/icon/png/003-facebook.png' >";
					}
				?>
				</a>
			</div>
		</div>		
	</div>
</footer>
