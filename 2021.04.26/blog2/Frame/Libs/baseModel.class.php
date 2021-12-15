<?php 

	namespace Frame\Libs;
	abstract class baseModel
	{
		protected $pdo;
		public function __construct()
		{
			$this->pdo= new \Frame\Vendor\PDOWrapper;
		}

		public static function getInstance()
		{
			$className=get_called_class();
			return new $className;
		}


	}
 ?>