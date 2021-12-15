<?php 
	namespace Admin\Controller;
	use Home\Model\IndexModel;
	class IndexController 
	{
		public function index()
		{
			$ModelObj = new IndexModel;
			$arrs = $ModelObj->fetchAll();
			include VIEW_PATH.'index.html';
		}
		
	}

 ?>