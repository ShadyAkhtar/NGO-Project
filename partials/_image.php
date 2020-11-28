<?php
session_start();
header("Content-Type: image/jpeg");

$text = $_SESSION['code'] = mt_rand(1111, 9999);
$total_lines = 25;
$font_size = 25;
$width  = 200;
$height = 50;
$image = imagecreate($width, $height);

$r = mt_rand(100, 200);
$g = mt_rand(100, 200);
$b = mt_rand(100, 200);

imagecolorallocate($image, $r, $g, $b);
$rc = mt_rand(0, 100);
$gc = mt_rand(0, 100);
$bc = mt_rand(0, 100);
$font_color = imagecolorallocate($image, $rc, $gc, $bc);

for($i=1; $i<=$total_lines; $i++){
    $x1 = mt_rand(0,200);
    $y1 = mt_rand(0,200);
    $x2 = mt_rand(0,200);
    $y2 = mt_rand(0,200);
    imageline($image, $x1, $y1, $x2, $y2, $font_color);
}

$angle = mt_rand(-10,10);


imagettftext($image, $font_size, $angle, 50, 40, $font_color, realpath('font.ttf'), $text);
imagejpeg($image);

?>