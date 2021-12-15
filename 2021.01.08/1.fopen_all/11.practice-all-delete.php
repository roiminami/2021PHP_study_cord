<?php 
	//递归删除所有文件
	function delete_all($filename)
	{
		if (is_dir($filename)) 
		{
			$handle = opendir($filename);
			while ($line = readdir($handle)) 
			{
			 	if ($line == '.' || $line == '..') 
			 	{
			 		continue;
			 	}
			 	delete_all($filename.'/'.$line);
			} 
			closedir($handle);
			if(rmdir($filename))
			{
				echo "successful!";
			}
		}
		else
		{
			unlink($filename);
		}
		
	}
	$filename = "./2021.01.05";
	delete_all($filename);
	?>