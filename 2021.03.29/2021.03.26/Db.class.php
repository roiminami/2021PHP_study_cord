<?php 
	
	class Db
	{
		private static $obj = null;
		private $link;
		private $host ;
		private $ad_name;
		private $pass ;
		private $db_name ;
		private $varchar;

		private function __construct($config=array())
		{
			$this->host=$config['host'];
			$this->ad_name=$config['ad_name'];
			$this->pass=$config['pass'];
			$this->db_name=$config['db_name'];
			$this->varchar=$config['varchar'];

			$this->conn();
			$this->selectdb();
			$this->var();

		}
		private function __clone()
		{
			# code...
		}
		private function conn()
		{
			if ($this->link=mysqli_connect($this->host,$this->ad_name,$this->pass)) 
			{
			 	echo "ok";
			} 
		}
		private function selectdb()
		{
			if (mysqli_select_db($this->link,$this->db_name)) 
			{
				echo "ok";
			}
		}
		private function var()
		{
			if (mysqli_set_charset($this->link,$this->varchar)) 
			{
				echo "ok";
			}
		}
		public static function getInstance($array)
		{
			if (!self::$obj instanceof self) 
			{
				
				self::$obj = new self($array);
			}
			
		}
	}
	$db1= Db::getInstance(array('host'=>'localhost','ad_name'=>'root','pass'=>'root','db_name'=>'php68','varchar'=>'utf8'));
 ?>