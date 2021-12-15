<?php 
	namespace Home\Model;
	
	final class IndexModel extends \Frame\Libs\baseModel
	{
		public function fetchAll()
		{
			$sql ="select * from photos";
			return $this->pdo->fetchAll($sql);
		}

	}
 ?>