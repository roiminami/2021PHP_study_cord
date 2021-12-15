<?php 
	namespace Frame\vendor;
	class PDOWrapper
	{
		private $db_type;
		private $db_host;
		private $db_port;
		private $db_user;
		private $db_pass;
		private $db_name;
		private $charset;
		private $pdo=null;

		public function __construct()
		{
			$this->db_type=$GLOBALS['config']['db_type'];
			$this->db_host=$GLOBALS['config']['db_host'];
			$this->db_port=$GLOBALS['config']['db_port'];
			$this->db_user=$GLOBALS['config']['db_user'];
			$this->db_pass=$GLOBALS['config']['db_pass'];
			$this->db_name=$GLOBALS['config']['db_name'];
			$this->charset=$GLOBALS['config']['charset'];

			$this->createPDO();
			$this->setErrMode();
		}
		private function createPDO()
		{
			try {
				$dsn="$this->db_type:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};charset={$this->charset}";
				$this->pdo = new \PDO($dsn,$this->db_user,$this->db_pass);
				
			} catch (\Exception $e) {
				echo "<h2>创建PDO类失败</h2>";
				echo "<br>错误编号：".$e->getCode();
				echo "<br>错误行号：".$e->getLine();
				echo "<br>错误文件：".$e->getFile();
				echo "<br>错误信息：".$e->getMessage();
				die();
			}
		}
		private function setErrMode()
		{
			$this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}
		public function exec($sql)
		{
			try {
				return $this->pdo->exec($sql);
			} catch (\Exception $e) {
				$this->showErrMsg($e);
			}
		}
		public function fetchOne($sql)
		{
			try {
				$PDOStatement = $this->pdo->query($sql);
				return $PDOStatement->fetch();
			} catch (\Exception $e) {
				$this->showErrMsg($e);
			}
		}
		public function fetchAll($sql)
		{
			try {
				$PDOStatement = $this->pdo->query($sql);
				return $PDOStatement->fetchAll();
			} catch (\Exception $e) {
				$this->showErrMsg($e);
			}
		}

		public function rowCount($sql)
		{
			try {
				$PDOStatement = $this->pdo->query($sql);
				return $PDOStatement->rowCount();
			} catch (\Exception $e) {
				$this->showErrMsg($e);
			}
		}
		private function showErrMsg($e)
		{
			echo "sql语句执行错误";
			echo "<br>错误编号：".$e->getCode();
			echo "<br>错误行号：".$e->getLine();
			echo "<br>错误文件：".$e->getFile();
			echo "<br>错误信息：".$e->getMessage();
			die();
		}




		


	}
	
 ?>