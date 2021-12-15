<?php 
	abstract class baseModel{
		protected $Db;
		public function __construct()
		{
			$array = array(
			'host'=>'localhost',
			'admin' =>'root',
			'pass' =>'root',
			'db_Name'=>'MVC',
			'charset' =>'utf8');
			$this->Db = Db::getInstance($array);
		}

	}

 ?>