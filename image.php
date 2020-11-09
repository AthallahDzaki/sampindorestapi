<?php
if(empty($_GET['text'])) echo 'Error Text Not Found', die;
$image = imagecreate(200,80);
$bg = imagecolorallocatealpha($image,255,255,255,0);
$black = imagecolorallocate($image,255,255,255);
imagettftext($image,11, 0, x, y, $black, "fontlocation", $_GET['text']);
header('Content-Type: image/png');
imagepng($image);
?> 
