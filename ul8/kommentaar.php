<?php 
	$bg_col="#fff";
	if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
 	  $bg_col=htmlspecialchars($_POST['bg_color']);
	} 
	$text_color="black";
	if (isset($_POST['color']) && $_POST['color']!="") {
 	  $text_color=htmlspecialchars($_POST['color']);
	} 
	$border_width='1';
	if (isset($_POST['borderw']) && $_POST['borderw']!="") {
 	  $border_width=htmlspecialchars($_POST['borderw']);
	} 
	$border_style='solid';
	if (isset($_POST['borderstyle']) && $_POST['borderstyle']!="") {
 	  $border_style=htmlspecialchars($_POST['borderstyle']);
	} 
	$border_color='skyblue';
	if (isset($_POST['bordercol']) && $_POST['bordercol']!="") {
 	  $border_color=htmlspecialchars($_POST['bordercol']);
	} 
	$radius='0';
	if (isset($_POST['borderradius']) && $_POST['borderradius']!="") {
 	  $radius=htmlspecialchars($_POST['borderradius']);
	} 
	$userstext="Siia tuleb kasutaja kommentaar";
	if (isset($_POST['text']) && $_POST['text']!="") {
 	  $userstext=htmlspecialchars($_POST['text']);
	} 
	$textsize="24";
	if (isset($_POST['size']) && $_POST['size']!="") {
 	  $textsize=htmlspecialchars($_POST['size']);
	} 
?>

<!DOCTYPE html>
<html>

<head>
  <title>Kodune ulesanne nr 8</title>
  <meta charset="utf-8"> 
  <style type="text/css">
  	#kasutajakomm {
		margin: 10px;
		padding: 5px;
		color: <?php echo $text_color; ?>;
		border-style: <?php echo $border_style; ?>;
		border-color: <?php echo $border_color; ?>;
		border-width: <?php echo $border_width; ?>px;
		border-radius: <?php echo $radius; ?>px;
		background-color: <?php echo $bg_col; ?>;
		font-size: <?php echo $textsize; ?>px;
	}
	#vorm {
		margin: 10px;
		padding: 5px;
		border-style: solid;
		border-color: black;
		border-width: 1px;
	}
  </style>
</head>

<body>

	<div id="vorm">
		<form action="kommentaar.php" method="post">

	 	<textarea name="text">Siia kirjuta kommentaar</textarea><br>
		
		<input type="color" name="bg_color"> Taustavarv<br>

		<input type="color" name="color"> Tekstivarv<br>

		<input type="number" name="size" min="12" max="72"> Teksti suurus (12-72px)<br>

		Piirjoon<br>
		<input type="number" name="borderw" min="0" max="20"> Piirjoone laius (0-20px)<br>
		<select name="borderstyle">
  			<option>solid</option>
  			<option>double</option>
  			<option>dotted</option>
  			<option>dashed</option>
		</select>
		<br>
		<input type="color" name="bordercol"> Piirjoone varv<br>
		<input type="number" name="borderradius" min="0" max="100"> Piirjoone nurga raadius (0-100px)<br>
		<input type="submit" value="esita">
	</form> 
	</div>

	<div id="kasutajakomm">
		<?php echo $userstext; ?>
	</div>
</body>

</html>