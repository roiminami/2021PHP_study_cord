<?php 
	$filename  = "./images/q1.jpg";
	$src_img   = imagecreatefromjpeg($filename);
	$src_w     = imagesx($src_img);
	$src_h     = imagesy($src_img);
	$dst_w     = $src_w*0.5;
	$dst_h     = $src_h*0.5;
	$dst_img   = imagecreatetruecolor($dst_w, $dst_h);
	imagecopyresampled($dst_img, $src_img,0, 0,0, 0, $dst_w, $dst_h, $src_w, $src_h);
	//header("content-type:image/jpg");
	imagejpeg($dst_img,"./images/q2.jpg");
	imagedestroy($dst_img);
	imagedestroy($src_img);
 ?>