<?php 
	namespace Admin\Model;
	use Frame\Libs\Db;
	final class IndexModel
	{
		public function fetchAll()
		{
			$db=Db::getInstance();
			$sql ="select * from photos";
			return $db->fetchAll($sql,1);
		}

	}
 ?>