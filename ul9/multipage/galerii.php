<?php require_once('head.html'); ?>
<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php
			$dir = 'pildid/';
			$images = glob($dir . '*.jpg');
			foreach ($images as $i) {
			echo("<img src='".$i."' alt='".$i."' />");
			}
		?>
	</div>
</div>
<?php require_once('foot.html'); ?>