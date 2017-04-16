
<?php

require_once('head.html');

$dir = 'pildid/';
$images = glob($dir . '*.jpg');
$imgList = array();
foreach($images as $img){
    $imgList[]=$img;
}

if(!empty($_GET)){
    $page=$_GET['page'];
} else {
    $page="pealeht";
}

switch($page) {
    case "pealeht":
        require_once('pealeht.html');
        break;
    case "galerii":
        require_once('galerii.html');
        break;
    case "vote":
        require_once('vote.html');
        break;
    case "tulemus":
        require_once('tulemus.html');
        break;}

require_once('foot.html');

?>
