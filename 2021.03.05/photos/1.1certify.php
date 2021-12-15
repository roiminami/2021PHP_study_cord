<?php 
	$arrayName = array_merge(range(0,9),range('A','Z'),range('a', 'z'));
	$rand = array_rand($arrayName,4);
	foreach ($rand as $key => $value) 
	{
		$str.= $arrayName[$value];
	}
	$width=70;
	$height=45;
	$image=imagecreatetruecolor($width,$height);
	$color1=imagecolorallocate($image, mt_rand(0,225), mt_rand(0,225),mt_rand(0,225));
	$color2=imagecolorallocate($image, mt_rand(0,225), mt_rand(0,225),mt_rand(0,225));
	$color3=imagecolorallocate($image, mt_rand(0,225), mt_rand(0,225),mt_rand(0,225));
	imagefill($image, 0, 0, $color1);
	$fontfile ="C:/study/2021program/2021.02.03/fonts/BIZ-UDGothicR.ttc";
	$text = $str;
	imagefilledrectangle($image, 6, 6, $width-6, $height-6, $color2);
	imagettftext($image, 20, 10, 9, $height-8, $color3, $fontfile, $text);
	for ($i=0; $i < 50 ; $i++) 
	{ 
		$color4=imagecolorallocate($image, mt_rand(0,225), mt_rand(0,225),mt_rand(0,225));
		imagesetpixel($image, mt_rand(0,$width), mt_rand(0,$height), $color4);
	}
	for ($i=0; $i < 5 ; $i++) 
	{ 
		$color4=imagecolorallocate($image, mt_rand(0,225), mt_rand(0,225),mt_rand(0,225));
		imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $color4);
	}
	header('content-type:image/jpg');
	imagejpeg($image);
	imagedestroy($image);
	imagedestroy($image);
	session_start();
	$_SESSION['certify']=strtolower($text);
 ?>