<?php 
	$image= imagecreatetruecolor(400, 300);
	$color0 = imagecolorallocate($image, 0, 0, 0);
	$color1 = imagecolorallocate($image, 250, 250, 250);
	imagefill($image, 0, 0, $color1);
//1
	$imgwidth = imagesx($image);
	$imgheight = imagesy($image);
//2
	$font = 5;
	$fontwidth = imagefontwidth($font);
	$fontheight = imagefontheight($font);
//3
	$str = "would you like to shoping";
	$xy_x = ($imgwidth-$fontwidth*strlen($str))/2;
	$xy_y =($imgheight-$fontheight)/2;
//4
	imagestring($image,$font, $xy_x, $xy_y,$str, $color0);
	header("content-type:image/jpg");
	imagejpeg($image);

 ?>