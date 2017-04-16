<?php require_once('head.html'); ?>
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p>
		<?php
		$dir = 'pildid/';
		$images = glob($dir . '*.jpg');
		$imgList = array();
		foreach($images as $img){
			$imgList[]=$img;
		}
		if(!empty($_GET)){
			error_reporting(0);
			$nr = intval($_GET['pilt'])-1;
			if(in_array($images[intval($_GET['pilt'])-1], $imgList)) {
				echo "<p>Thank you! Your vote counts! The picture number ".$_GET['pilt']." is my favorite too. </p>";
			} else {
				echo "<p>Your vote is not in the list, sorry.</p>";
			}
		} else {
			echo "<p>Go back and vote, this is your obligation.</p>";
		}
		?>
	</p>
</div>
<?php require_once('foot.html'); ?>

