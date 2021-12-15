<?php 
	/**
	 * 
	 */
	class Db
	{
		//成员属性
		private static $Db=null;
		private $host;
		private $admin;
		private $pass;
		private $db_Name;
		private $charset;
		private static $link;

		//克隆方法阻止类外new
		private function __clone(){}
		//自动方法赋值
		private function __construct($array)
		{
			$this->host = $array["host"];
			$this->admin = $array["admin"];
			$this->pass = $array["pass"];
			$this->db_Name = $array["db_Name"];
			$this->charset = $array["charset"];

			$this->connect();
			$this->db_Selecte();
			$this->charset();
		}
		//实例化静态函数
		public static function getInstance($array)
		{
			if (!self::$Db instanceof self) 
			{
				$Db = new self($array);
			}
			return $Db;
		}

		//连接数据库方法
		private function connect()
		{
			$this->link = mysqli_connect($this->host,$this->admin,$this->pass);
		}

		//选择数据库方法
		private function db_Selecte()
		{
			mysqli_select_db($this->link,$this->db_Name);
		}

		//设置字符串方法
		private function charset()
		{
			mysqli_set_charset($this->link,$this->charset);
		}


		//增删改查
		//增删改
		public function exec($sql)
		{
			$substr = substr($sql,0,6);
			if (strtolower($substr=="select")) 
			{
				echo "不能执行select语句"; 
				die();
			}
			return mysqli_query($this->link,$sql);
		}

		//查
		private function select($sql)
		{
			$substr = substr($sql,0,6);
			if (!strtolower($substr=="select")) 
			{
				echo "只能执行select语句"; 
				die();
			}
			return mysqli_query($this->link,$sql);
		}
		public function fetchOne($sql,$type=3)
		{	
			$types = array(1=>MYSQLI_ASSOC,2=>MYSQLI_NUM,3=>MYSQLI_BOTH);
			$results = $this->select($sql);
			return mysqli_fetch_array($results,$types[$type]);
		}
		public function fetchAll($sql,$type=3)
		{
			$types = array(1=>MYSQLI_ASSOC,2=>MYSQLI_NUM,3=>MYSQLI_BOTH);
			$results = $this->select($sql);
			return mysqli_fetch_all($results,$types[$type]);
		}

	}
	

 ?>