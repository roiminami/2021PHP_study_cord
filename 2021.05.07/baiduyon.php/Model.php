<?php 
	require_once("baseModel.php");
	class Model extends baseModel
	{
		public function criate($fileName)
		{
			if (file_exists($fileName)) 
			{   
			    $message = "文件夹已经存在！无法创建";
				$message = baseModel::jump($message);
			}
			else
			{
				if(mkdir($fileName))
				{
					$message = "文件夹创建成功！正在跳转";
					$message = baseModel::jump($message);
				}

			}
		}
		public function delete($fileName)
		{
			if (file_exists($fileName)) 
			{
				if (is_dir($fileName)) 
				{
					if(rmdir($fileName))
					{
						$message = "文件夹删除成功！正在跳转";
						$message = baseModel::jump($message);
					}
				}
				else
				{
					$message = "该文件不是文件夹，无法删除";
					$message = baseModel::jump($message);
				}	
			}
			else
			{
				$message = "文件夹不存在！无法删除";
					$message = baseModel::jump($message);
			}
		}
		public function changeMod($filename, $mode)
		{
			if (chmod($filename, $mode)) 
			{
				$message = "文件夹修改权限成功，权限为".substr(decoct(fileperms($filename)), 1);
				$message = baseModel::jump($message);
			}
			else
			{
				$message = "文件夹修改权限成功失败";
				$message = baseModel::jump($message);
			}
		}
		public function rename($oldname,$newname)
		{
			if(rename($oldname,$newname))
			{
				$message = "文件夹名称修改成功";
				$message = baseModel::jump($message);
			}
			else
			{
				$message = "文件夹名称修改失败";
				$message = baseModel::jump($message);
			}

		}
		public function opendir($fileName)
		{
			if (file_exists($fileName)) 
			{
				if (is_dir($fileName)) 
				{
					$handle=opendir($fileName);	
					echo "<ul>";
					while ($result = readdir($handle)) 
					{
						if ($result !=="." && $result !=="..") 
						{
							echo "<li>$result</li>";
							if (is_dir($fileName."./".$result)){
								$this->opendir($fileName."./".$result);
							}
						}
					}
					echo "</ul>";
					closedir();
				}
				else
				{
					$message = "该文件不是文件夹，无法打开";
					$message = baseModel::jump($message);
				}	
			}
			else
			{
				$message = "文件夹不存在！无法打开";
					$message = baseModel::jump($message);
			}
		}
		public function fopen($fileName,$mode)
		{
			$resource = fopen($fileName,$mode);
			while ($line = fread($resource,1024)) 
			{
				$str.=$line;
			}
			header("content-type:image/jpg");
			echo $str;
		}
		public function file_arr($fileName)
		{
			$array = file($fileName,2|4);
			$str.= "<table>";
			foreach ($array as $value) 
			{
				$array2=explode('，',$value);
				$str.="<tr>";
				foreach ($array2 as $value) 
				{
					$str.="<td>$value</td>";
				}
				$str.="</tr>";
			}
			$str.= "</table>";
			echo "$str";
		}
		public function file_put($fileName,$url)
		{
			$data = file_get_contents($url);
			if (file_put_contents($fileName, $data)) 
			{
				$message = "存储成功";
				$message = baseModel::jump($message);
			}
			else
			{
				$message = "存储失败";
				$message = baseModel::jump($message);
			}
		}
		public function unlink_dir($fileName)
		{
			if (file_exists($fileName)) 
			{
				if (is_dir($fileName)) 
				{
					$handle=opendir($fileName);	
					while ($line = readdir($handle)) 
					{
						if ($line=="."||$line=="..") 
						{
							continue;
						}
						$this->unlink_dir($fileName."./".$line);
					}
					closedir();
					rmdir($fileName);
				}
				else
				{
					unlink($fileName);
				}	
			}
			else
			{
				$message = "文件夹不存在！无法删除";
					$message = baseModel::jump($message);
			}
		}

		
	}

 ?>