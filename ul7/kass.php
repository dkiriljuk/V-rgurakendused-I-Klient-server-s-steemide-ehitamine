<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Kodune ülesanne - 7. nädal</title>


</head>
<body>


<?php
$kass= array(
    array('name'=>'Sofia', 'optional'=>'kellele meeldib asju ümber ajada', 'age'=>'4', 'color'=>'kollane', 'imgurl'=>'https://kyllipruuli.files.wordpress.com/2007/12/scan100771.jpg'),
    array('name'=>'Peeter', 'optional'=>'kellele ei meeldi läikivad mänguasjad', 'age'=>'2', 'color'=>'must', 'imgurl'=>'http://www.loomadevarjupaik.eu/media/varjupaik/2015-12/must%20kass-14507989220.jpg'),
    array('name'=>'Tom', 'optional'=>'kellele on väga raske sobivat toitu leida', 'age'=>'6', 'color'=>'hall', 'imgurl'=>'http://www.kassiabi.ee/failid/galeriiv28782.jpg'),
    array('name'=>'Muira', 'optional'=>'kellele meeldivad lapsed', 'age'=>'8', 'color'=>'laiguline', 'imgurl'=>'http://cdn2.greatfon.com/uploads/picture/469/249/249469/picture-249469.jpg'),
    array('name'=>'Nurr', 'optional'=>'kellele ei tasu lähedale minna', 'age'=>'1', 'color'=>'mustvalge', 'imgurl'=>'http://cdn2.wallpapersok.com/uploads/picture/897/332/332897/picture-332897.jpg')
);
foreach ($kass as $i){
include 'kass.html';
}
?>


</body>
</html>