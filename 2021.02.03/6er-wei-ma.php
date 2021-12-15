<?php 
	$arr = array_merge(range(0, 9),range('a','z'),range('A', 'Z')) ;
	$arr1 = array_rand($arr,4);
	foreach ($arr1 as $value) 
	{
		$str.= $arr[$value];
	}
	$img_width = 130;
	$img_height = 80;
	$img = imagecreatetruecolor($img_width, $img_height);
	$img_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	$font_color= imagecolorallocate($img, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	$rect_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imagefilledrectangle($img, 10, 
		10, $img_width-10, $img_height-10, $rect_color);
	imagefill($img, 0, 0, $img_color);
	$fontfile = "C:/study/2021program/2021.02.03/fonts/BIZ-UDGothicB.ttc";
	imagettftext($img, 40, 0,10,60, $font_color, $fontfile,$str);
	for ($i=0; $i < 200 ; $i++) 
	{ 
		$point_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagesetpixel($img, mt_rand(0,$img_width), rand(0,$img_height), $point_color);
	}
	header("content-type:image/jpg");
	imagejpeg($img);
	imagedestroy($img);
 ?>