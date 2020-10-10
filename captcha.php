<?php
session_start();
$session= $_SESSION['secure'];

$font_size= 20;
$image_width= 110;
$image_height= 50;

$image= imagecreate($image_width, $image_height);
imagecolorallocate($image, 255,255,255);
$fontcolor= imagecolorallocate($image, 0,0,0);

for($i=1;$i<=30;$i++){
	$x1=rand(1,100);
	$y1=rand(1,50);
	$x2=rand(1,100);
	$y2=rand(1,50);
	
	imageline($image,$x1,$y1,$x2,$y2,$fontcolor);
}



imagettftext($image, $font_size, 0, 15, 30, $fontcolor, 'GOTHICI.ttf', $session);
imagejpeg($image);
?>