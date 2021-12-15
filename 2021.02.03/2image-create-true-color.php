<?php 
	$imagebg = imagecreatetruecolor(400, 300);
	$filename = "../2021.01.31/images/tu1.jpg";
	$imagebgjpg = imagecreatefromjpeg($filename);
	imagejpeg($imagebgjpg,"./images/q1.jpg",80);
	imagedestroy($imagebgjpg);
 ?>