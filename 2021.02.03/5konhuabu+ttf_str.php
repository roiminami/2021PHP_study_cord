<?php 
	$image= imagecreatetruecolor(400, 300);
	$color0 = imagecolorallocate($image, 0, 0, 0);
	$color1 = imagecolorallocate($image, 250, 250, 250);
	imagefill($image, 0, 0, $color1);

	$ttfstr = "こんにちは";
	$fontfile = "C:/study/2021program/2021.02.03/fonts/BIZ-UDGothicB.ttc";

	imagettftext($image,12, 0, 0, 20, $color0, $fontfile, $ttfstr);
	header("content-type:image/jpg");
	imagejpeg($image);
 ?>