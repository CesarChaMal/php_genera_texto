<?php
$im = imagecreatetruecolor(300,200);
$color = imagecolorallocate($im, 255, 255, 0);
$color2 = imagecolorallocate($im, 0, 0, 0);
imagefill($im,0,0,$color2);
$font = '/fonts/times.ttf';
$fontsize = "12";
$fontangle = "0";
$imagewidth = imagesx($im);
$imageheight = imagesy($im);

$text = "My right align text";

$box = @imageTTFBbox($fontsize,$fontangle,$font,$text);
$textwidth = abs($box[4] - $box[0]);
$textheight = abs($box[5] - $box[1]);
$xcord = $imagewidth - ($textwidth)-2; // 2 = some space from right side.
$ycord = ($imageheight/2)+($textheight/2);

ImageTTFText ($im, $fontsize, $fontangle, $xcord, $ycord, $black, $font, $text);
?>