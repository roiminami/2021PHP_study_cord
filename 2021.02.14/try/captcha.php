<?php 
	$arr = array_merge(range(1,10),range('a', 'z'),range('A', 'Z'));
	$arr1 = array_rand($arr,4);
	foreach ($arr1 as $key => $value) 
	{
		$str.=$arr[$value];
	}
	$img_width = 100;
	$img_height =40;
	$image= imagecreatetruecolor($img_width, $img_height);
	$color = imagecolorallocate($image, mt_rand(0,255),mt_rand(0,255), mt_rand(0,255));
	$color1 = imagecolorallocate($image, mt_rand(1,255),mt_rand(1,255), mt_rand(1,255));
	$color2 = imagecolorallocate($image, mt_rand(1,255),mt_rand(1,255), mt_rand(1,255));
	
	imagefill($image, 0, 0, $color2);
	imagefilledrectangle($image, 4, 
		4, $img_width-4, $img_height-4, $color);
	$fontfile="C:/study/2021program/2021.02.14/try/fonts/BIZ-UDGothicB.ttc";
	imagettftext($image,20, 10, 20,35, $color1, $fontfile,$str);
	for ($i=0; $i < 150 ; $i++) 
	{ 
		$color3 = imagecolorallocate($image, mt_rand(1,255),mt_rand(1,255), mt_rand(1,255));
		imagesetpixel($image, mt_rand(0,$img_width), rand(0,$img_height), $color3);
	}
	for ($i=0; $i < 10 ; $i++) 
	{ 
		$color3 = imagecolorallocate($image, mt_rand(1,255),mt_rand(1,255), mt_rand(1,255));
		imageline($image, mt_rand(0,$img_width), rand(0,$img_height), mt_rand(0,$img_width),rand(0,$img_height),$color3);
	}

	header("content-type:image/jpg");
	imagejpeg($image);
	imagedestroy($img);
	session_start();
	$_SESSION['certify'] = strtolower($str);
 ?>