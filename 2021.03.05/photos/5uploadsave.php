<?php 
	session_start();
	if (empty($_SESSION['admin'])) 
	{
		echo "まず、登録しなさい！";
		header("refresh:2;url='1login.php'");
		die();
	}
	if ($_POST['token']!==$_SESSION['token']) 
	{
		echo "指定されたフォームから、アップロードしなさい!";
		header("refresh:2;url='4upload.php'");
		die();
	}
	$error=$_FILES['fileName']['error'];
	if ($error==4) 
	{
		echo "アップロードするファイルが選択されていません";
		header("refresh:2;url='4upload.php'");
		die();
	}
	elseif ($error!==0) 
	{
		echo "エラー";
		header("refresh:2;url='4upload.php'");
		die();
	}
	$file=$_FILES['fileName'];
	$size = $file['size'];
	if ($size>2*1024*1024) 
	{
		echo "ファジー大きさが制限を超えています。";
		header("refresh:2;url='4upload.php'");
		die();
	}
	$name = $file['name'];
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$tmp_name = $file['tmp_name'];
	$needle = finfo_file($finfo, $tmp_name);
	$haystack=array('image/jpeg','image/png','image/gif');
	if (!in_array($needle, $haystack)) 
	{
		echo "ファイル格式が写真のみとなっています。";
		header("refresh:2;url='4upload.php'");
		die();
	}
	$ext = pathinfo($name,PATHINFO_EXTENSION);
	$haystack=array('jpg','png','gif');
	if (!in_array($ext, $haystack)) 
	{
		echo "拡張子が写真格式となければならないです。";
		header("refresh:2;url='4upload.php'");
		die();
	}
	$destination = "./images/".uniqid('img_').'.'.$ext;
	if (!move_uploaded_file($tmp_name, $destination)) 
	{
	 	echo "移動が失敗しました";
	};
	$title = $_POST['title'];
	$intro = $_POST['intro'];
	//$destination
	$time = time();
	require_once('conn.php');
    $sql = "INSERT INTO photos(id,title,intro,imgurl,time,hits)VALUES(null,'$title','$intro','$destination','$time',0)";
        if (mysqli_query($link,$sql)) 
    {
    	echo "アップロード出来ました。";
    	header("refresh:2;url='3index.php'");
		die();
    }
    else
    {
    	echo "アップロードが失敗しました。";
    	header("refresh:2;url='4upload.php'");
		die();
    }