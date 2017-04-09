<?php
$dir = "kaust"; // kausta nimi, mida avada
$failid = array(); // massiiv, kuhu lisatakse leitud failid
if ($dh = opendir($dir)) { // kui funktsioon opendir vastava sisendiga onnestub, siis jata viide kaustale meelde muutujasse $dh ning labi jargnev koodiplokk
  while (($file = readdir($dh)) !== false) { // seni, kuni funktsiooniga readdir vastavas kaustas saab katte mingi kirje (fail/kaust), salvesta see kirje muutujasse $file ning labi jargnev koodiplokk
    if(!is_dir($file)) { // juhul, kui saadud kirje ei ole kaust, siis lisa antud kirje failide massiivi
      $failid[] = $file;
    }
  }
  closedir($dh); // kui kausta lugemine on labi, sulge uhendus kaustaga.
} else { // kui funktsioon opendir luhtub(kaust puudub), siis esita veateade ja lopeta programmi too
  die("Ei suuda avada kataloogi $dir");
}
print_r($failid);// kuva failide massiivi sisu
?>