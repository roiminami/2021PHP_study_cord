<?php 
	if ($_FILES) 
	{
		$filename=$_FILES['img']['tmp_name'];
		$destination = dirname(__FILE__).'\a_catched.jpg';
		if ($_FILES['error']==0) 
		{
			if(move_uploaded_file($filename, $destination))
			{
				echo "上传成功";
			}
			else
			{
				echo "载入失败！";
			}	
		}
		else
		{
			echo "上传失败！";
		}
		
	}
 ?>