<?php 
	
	session_start();
	$title = $_POST['photo_title'];
	$intro = $_POST['intro'];
	if (!isset($_POST) || $_POST['token'] !== $_SESSION['token']) 
	{
		header('location:./upload.php');
		die();
	}
	if (empty($title)) 
	{
		echo "照片标题不能为空";
		header('refresh:3;url=./upload.php');
		die();
	}
	if (empty($intro)) 
	{
		echo "照片描述不能为空";
		header("refresh:1;url=./upload.php");
		die();
	}
	$name = $_FILES['upload']['name'];
	$type = $_FILES['upload']['type'];
	$tmp_name = $_FILES['upload']['tmp_name'];
	$error = $_FILES['upload']['error'];
	$size = $_FILES['upload']['size'];
	if ($error!==0) 
	{
		echo "文件上传出错,请重试" ;
		header('refresh:3;url=./upload.php');
		die();
	}
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$needle =  finfo_file($finfo,$tmp_name);
	$haystack = array('image/jpeg' ,' image/gif ','image/png');
	if (!in_array($needle,$haystack)) 
	{
		echo "图片格式不正确";
		header('refresh:3;url=./upload.php');
		die();
	} 
	if (!in_array($type,$haystack)) 
	{
		echo "文件扩展名错误;";
		header('refresh:3;url=:./upload.php');
		die();
	}
	$ext = pathinfo($name,PATHINFO_EXTENSION);
	$destination = './tu-image/'.uniqid('tu-').'.'.$ext;
	move_uploaded_file($tmp_name, $destination);
	$title = $_POST['photo_title'];
	$intro = $_POST['intro'];
	$imgsrc = $destination;
	$adtime = time();
	require_once('./conn.php');
	$sql = "INSERT INTO `photos`(`title`,`intro`,`imgsrc`,`adtime`,`hits`) VALUES('$title','$intro','$imgsrc',$adtime,0)";
	if(mysqli_query($link,$sql))
	{
		echo "上传成功";
		header('refresh:2;url=ndex.php');
		die();
	}

 ?>