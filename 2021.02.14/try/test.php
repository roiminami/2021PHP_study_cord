<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
.css > em> strong {color:red;border: 1px black solid;}
</style>
</head>

<body>
<table class="css" > 
	<tr><td>11121</td></tr> 
	<tr><td>ver</td></tr> 
</table>
<h1 class="css"> <em> <strong>very</strong></em> </h1>
table不可以用css改子元素
</body>
</html>
$filename = $rowList[0]['imgsrc'];
	$src_img = imagecreatefromjpeg($filename);
	$width = imagesx($src_img);
	$height = imagesy($src_img);
	$dst_image = imagecreatetruecolor($width/10, $height/10);
	$okimg = imagecopyresampled($dst_image, $src_img, 0, 0, 0, 0, $width/10, $height/10, $width, $height);
	header("content-type:image/jpg");
	imagejpeg($dst_image);
	imagedestroy($src_img);
	imagedestroy($dst_img);
