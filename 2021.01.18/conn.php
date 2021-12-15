<?php 
	$mainname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myemployees";
	if (!$link = @mysqli_connect($mainname,$username,$password)) 
	{
		echo "connect the database is unsucessfull";
		die();
	}
	if (!mysqli_select_db($link,$dbname)) 
	{
		echo "select the database is unsucessfull";
		die();
	}
	
	if (!mysqli_set_charset($link,'utf8')) 
	{
		echo "change the markchar is unsucessfull";
		die();
	}
?>