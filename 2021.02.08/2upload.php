<?php 
	if (isset($_POST) && $_POST['token'] == 123) 
	{
		if ($_FILES['upload-file']['error'] != 0 ) 
		{
			echo "出现上传错误";
			die();
		}
		if ($_FILES['upload-file']['size'] > 2*1024*1024) 
		{
			echo "文件大小超出规定";
			die();
		}
		$needle = $_FILES['upload-file']['type'];
		$haystack = array('image/jpeg','image/png','image/gif');
		if (!in_array($needle,$haystack)) 
		{
			echo "文件格式需要为图片";
			die();
		}
		$ext = pathinfo($_FILES['upload-file']['name'],PATHINFO_EXTENSION) ;
		if (move_uploaded_file($_FILES['upload-file']['tmp_name'],'C:/study/2021program/2021.02.08/upload/'.uniqid().'.'.$ext)) 
		{
			echo "文件上传成功！";
		}
	}
