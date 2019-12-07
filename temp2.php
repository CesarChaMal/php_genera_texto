<?
// Welcome to WebmasterWorld, romzinho2k7.

//You need to calculate where you want the text strings in the x and y coordinates of the image. To do so, you need to know the size of the text box itself 
//(this must include any text rotation/angle). This is not perfect but should get you started.

$text = "TEST";
$font = "fonts/verdanab.ttf";
$size = 12;
$angle = 0;
$insert = imagecreatefromjpeg("cars.jpg");
//choose textcolor (white)
$col = imagecolorallocate ($insert, 255, 255, 255);
//check width of the text
$bbox = imagettfbbox ($size, $angle, $font, $text);
$bbox["left"] = 0- min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
$bbox["top"] = 0- min($bbox[1],$bbox[3],$bbox[5],$bbox[7]);
$bbox["width"] = max($bbox[0],$bbox[2],$bbox[4],$bbox[6]) - min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
$bbox["height"] = max($bbox[1],$bbox[3],$bbox[5],$bbox[7]) - min($bbox[1],$bbox[3],$bbox[5],$bbox[7]);
extract ($bbox, EXTR_PREFIX_ALL, 'bb');
//check width of the image
$width = imagesx($insert);
$height = imagesy($insert);
$pad = 0;
//write text
// top:
imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $bb_top+$pad, $col, $font, $text);
// left:
imagettftext($insert, $size, $angle, $bb_left+$pad, $height/2-$bb_height/2, $col, $font, $text);
// bottom:
imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $height-$bb_height-$pad, $col, $font, $text);
// right:
imagettftext($insert, $size, $angle, $width-$bb_width-$pad, $height/2-$bb_height/2, $col, $font, $text);
// center:
imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $height/2-$bb_height/2, $col, $font, $text); 
//output picture
header("Content-type: image/jpeg");
imagejpeg($insert,"",100);
imagedestroy($insert);
exit;
?>