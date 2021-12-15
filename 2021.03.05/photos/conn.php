<?php 
	$host = "localhost";
	$admin = "root";
	$password = "root";
	$db_name = "php68";
	if (!$link = mysqli_connect($host,$admin,$password,$db_name)) 
	{
		echo "连接数据库失败";
	}
	mysqli_set_charset($link,'utf8');
 ?>