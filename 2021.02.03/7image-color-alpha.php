<?php 
	$filename = "./images/q1.jpg";
	$gb_img = imagecreatefromjpeg($filename);
	$color = imagecolorallocatealpha($gb_img, 10, 10, 10,100);
	$fontfile = "C:/study/2021program/2021.02.03/fonts/BIZ-UDGothicB.ttc";
	$text = 'こんにちは';
	imagettftext($gb_img, 45, 0, 10, 80, $color, $fontfile, $text);
	header("content-type:image/jpg");
	imagejpeg($gb_img);
 ?>