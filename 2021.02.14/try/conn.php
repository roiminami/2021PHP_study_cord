<?php 
	$host = "localhost";
	$username = "root";
	$password = "root";
	if (!@$link =mysqli_connect($host,$username,$password)) 
	{
	 	echo "连接数据库失败";
	} 
	$db_name = "php69";
	if (!@mysqli_select_db($link,$db_name)) 
	{
		echo "连接到自己的数据库名失败";
	}
	if (!@mysqli_set_charset($link,'utf8')) 
	{
	echo "设定字符集失败";
	}

 ?>