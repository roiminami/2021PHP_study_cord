<?php 


	session_start();
	require_once('../../2021.02.14/try/conn1.php');
	$admin    = $_POST['admin'];
	echo "$admin";
	$password = md5($_POST['password']);
	

	$sql ="select * from user1 where username='$admin'";
	$result = mysqli_query($link,$sql);
	$records = mysqli_num_rows($result);
	if (!$records==1) 
	{
		echo "アカウントあるいはパスワードが間違っています";
		header("refresh:1;url='1login.php'");
		die();
	}
	$_SESSION['admin'] = $admin;
	echo $_SESSION['admin'];
	header("location:3index.php");
	
 ?>