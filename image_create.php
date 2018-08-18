<?php

$Date = $_GET['date'];
header('Content-Type: image/png');
$im = imagecreatetruecolor(900, 120);


$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 200, 200, 200);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 900, 120, $grey);




$font = $_SERVER['DOCUMENT_ROOT'] . '/BirthdayFinder/Font.ttf';



imagettftext($im, 25, 0, 370, 60, $black, $font, $Date ."\n" . "  jjjj.mm.tt");



imagepng($im);
imagedestroy($im);

?>
