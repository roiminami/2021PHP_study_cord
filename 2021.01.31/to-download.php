<?php 
	$arrayName = array
	('646f522016a9e4ae436508daf297256c' => 
		array('tu1.jpg' ,'图片1' ),
		'a287f248ec1aa9f4d084f596eeb8cc8a' =>
		array('tu2.jpg' ,'图片2' ),
		'd5298c4e987d418b7a2c1f8753e3a633' =>
		array('tu3.jpg' ,'图片3' )
	);
	$realname = './images/'.$arrayName[$_GET['f']][0];
	$handle = fopen($realname, 'rb');
	header("content-type:application/octet-steam");
	header("content-disposition:attachment;filename=".$arrayName[$_GET['f']][1]);
	while ($str = fread($handle, 1024)) 
	{
		echo "$str";
	}
 ?>
