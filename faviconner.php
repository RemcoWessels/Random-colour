<?php
$imgFavicon = imagecreatetruecolor(16,16);
$imgOgImage = imagecreatetruecolor(1200,630);

$color_1 = mt_rand(0,255);
$color_2 = mt_rand(0,255);
$color_3 = mt_rand(0,255);

$color = imagecolorallocate($imgFavicon, $color_1, $color_2, $color_3); 
imagefill($imgFavicon, 0, 0, $color);

$color = imagecolorallocate($imgOgImage, $color_1, $color_2, $color_3); 
imagefill($imgOgImage, 0, 0, $color);

// change values to hex
// $color1Hex = dechex($color_1);
// $color2Hex = dechex($color_2);
// $color3Hex = dechex($color_3);

// add leading zeros
$color_1 = str_pad($color_1, 3, "0", STR_PAD_LEFT);
$color_2 = str_pad($color_2, 3, "0", STR_PAD_LEFT);
$color_3 = str_pad($color_3, 3, "0", STR_PAD_LEFT);

// $favicon = 'favicons/' . $now . $color_1 . $color_2 . $color_3 . '.png';
$favicon = 'favicons/' . $color_1 . $color_2 . $color_3 . '.png';imagepng($imgFavicon, $favicon);
$ogImage = 'ogimages/' . $color_1 . $color_2 . $color_3 . '.png';imagepng($imgOgImage, $ogImage);
?>
