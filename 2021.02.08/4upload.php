<?php 
	if (isset($_POST)&& $_POST['token'] == '123')
	{
		$arrs = $_FILES['upload'];
		foreach ($arrs['error'] as $key => $value) 
		{
			if ($value !== 0 && $value!==4) 
			{
				echo "文件上传失败<br>";
				die();
			}	
		}
		foreach ($arrs['size'] as $key => $value) 
		{
			if ($value > 2*1024*2014) 
			{
				echo $arrs['name'][$key]."的文件大小超出规定<br>";
				die();
			}
		}
		$haystack = array('image/png','image/jpeg','image/gif','' );
		foreach ($arrs['type'] as $key => $value) 
		{
			if (!in_array($value, $haystack)) 
			{
				echo $arrs['name'][$key].'的文件不是图片格式';
				die();
			}
		}
		foreach ($arrs['name'] as $key => $value) 
		{
			if ($value !=='') 
			{
				$ext = pathinfo($value,PATHINFO_EXTENSION);
				$tmp_name = $arrs['tmp_name'][$key];
				$dst_name = 'C:/study/2021program/2021.02.08/upload/'.uniqid().'.'.$ext;
						if (move_uploaded_file($tmp_name,$dst_name )) 
						{
							echo "{$arrs['name'][$key]}.文件上传成功<br>";
						}
			}
		}
	}

 ?>