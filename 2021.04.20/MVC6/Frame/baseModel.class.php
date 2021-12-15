<?php 
	abstract class baseModel{
		protected $Db;
		public function __construct()
		{
			$this->Db = Db::getInstance($array);
		}

	}

 ?>