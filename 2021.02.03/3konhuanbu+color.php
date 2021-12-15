<?php 
	$image= imagecreatetruecolor(400, 300);
	$color = imagecolorallocate($image, 255, 255, 0);
	imagefill($image, 0, 0, $color);
	header("content-type:image/jpg");
	imagejpeg($image);