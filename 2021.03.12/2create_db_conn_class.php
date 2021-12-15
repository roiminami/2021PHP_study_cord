<?php 
	//制作连接数据库的类
	class Db
	{
		private $host;
		private $name;
		private $pass;
		private $db_name;
		private $charset;
		private $link;


		public function __construct($configuration)
		{
			$this->host    =   $configuration['host'];
			$this->name    =   $configuration['name'];
			$this->pass    =   $configuration['pass'];
			$this->db_name =   $configuration['db_name'];
			$this->charset =   $configuration['charset'];

			$this-> db_conn();
			$this-> db_select();
			$this-> db_charset();
		}
		private function db_conn()
		{
			if (!$this->link = @mysqli_connect($this->host,$this->name,$this->pass)) 
			{
				echo "连接服务器失败！";
				die();
			}	
		}
		private function db_select()
		{
			if (!@mysqli_select_db($this->link,$this->db_name)) 
			{
				echo "选择数据库失败！";
				die();
			}	
		}
		private function db_charset()
		{
			if (!@mysqli_set_charset($this->link,$this->charset)) 
			{
				echo "修改字符集失败！";
				die();
			}
			echo "成功！";	
		}
	}
	$arr  = $arrayName = array('host' =>'localhost','name' =>'root','pass' =>'root','db_name' =>'php68','charset' =>'utf8');

	new Db($arr);
 ?>