<?php
session_start();
header("Content-Type: image/jpeg");


$random_alpha = md5(rand());
// $text = $_SESSION['code'] = mt_rand(1111, 9999);
$text = $_SESSION['code'] =  substr($random_alpha, 0, 6);
// $_SESSION['code']  = $text;
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
 $font_array = array('font/font.ttf','font/font1.ttf','font/font2.ttf','font/font3.ttf','font/font4.ttf','font/font5.ttf','font/font6.ttf','font/font7.ttf','font/font8.ttf','font/font9.ttf','font/font10.ttf','font/font11.ttf','font/font12.ttf','font/font13.ttf','font/font14.ttf');
 $font = array_rand($font_array);
 $font_captcha = $font_array[$font];

imagettftext($image, $font_size, $angle, 30, 40, $font_color, realpath($font_captcha), $text);
imagejpeg($image);

?>