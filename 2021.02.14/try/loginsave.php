<?php 
	require_once('./conn.php');
	session_start();
	if (isset($_POST) && $_POST['token'] == $_SESSION['token']  ) 
	{
		if (strtolower($_POST['certify'])!== $_SESSION['certify']) 
		{
		  	echo "验证码错误";
		  	header("refresh:3;url=./login.php");
		  	$_SESSION['username'] = $username;
		  	die();
		}  
		$username = $_POST['adminname'];
		$password = md5($_POST['password']);
		$vertify = $_POST['yzm'];
		$sql = "SELECT * from user WHERE password= '$password' and username = '$username'";
		$result =  mysqli_query($link,$sql);
		$records = mysqli_num_rows($result);
		if (!$records==1 ) 
		{
			echo "密码或用户名不正确";
			header("refresh:3;url=./login.php");
			$_SESSION['username'] = "";
			die();
		}
		$_SESSION['username'] = $username;
		header('location:./ndex.php');
	}
	else
	{
		header("location:./login.php");
	}


 ?>