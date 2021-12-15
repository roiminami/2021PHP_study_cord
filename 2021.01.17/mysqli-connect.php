<?php 
	$mainname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myminami";
	if($abject=mysqli_connect($mainname,$username,$password))
	{
		echo "1，连接大数据库successful<br>";
	}
	if(mysqli_select_db($abject,$dbname))
	{
		echo "2，选择数据库successful<br>";
	}
	if(mysqli_set_charset($abject,'utf8'))
	{
		echo "3，告诉数据库字符格式successful<br>";
	}
	$sql = "CREATE DATABASE news_db";
	if(mysqli_query($abject,$sql))
	{
		echo "4，创建数据库successful<br>";
	}
	if(mysqli_select_db($abject,'news_db'))
	{
		echo "5，选择数据库successful<br>";
	}
	$sql = "CREATE TABLE news (id int PRIMARY KEY AUTO_INCREMENT,title varchar(40),content varchar(100))";
	if (mysqli_query($abject,$sql)) 
	{
		echo "6，创建表successful<br>";
	}
	$sql = "INSERT INTO news (id,title,content) VALUES(null,'王健林的小目标','先赚他一个亿')";
	if (mysqli_query($abject,$sql)) 
	{
		echo "7，增 插入数据successful<br>";
	}
	$sql = "DELETE FROM news WHERE id=1";
	if (mysqli_query($abject,$sql)) 
	{
		echo "8，删除 插入数据successful<br>";
	}
	$sql = "UPDATE news SET title='王健林的大目标' WHERE id=8";
	if (mysqli_query($abject,$sql)) 
	{
		echo "改，update 插入数据successful<br>";
	}
	$sql = "SELECT * FROM news";
	$result = mysqli_query($abject,$sql);
	$row=mysqli_fetch_row($result);
	print_r($row);
	echo "<br>";
	$row=mysqli_fetch_assoc($result);
	print_r($row);
	echo "<br>";
	$rowList=mysqli_fetch_all($result, MYSQLI_ASSOC);
	print_r($rowList);
	echo "<br>";

 ?>