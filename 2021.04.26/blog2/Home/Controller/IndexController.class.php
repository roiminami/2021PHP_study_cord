<?php 
	namespace Home\Controller;
	use Home\Model\IndexModel;
	class IndexController extends \Frame\Libs\baceController
	{
		public function index()
		{
			$ModelObj = IndexModel::getInstance();
			$arrs = $ModelObj->fetchAll();
			$this->smartyObj->assign("arrs",$arrs);
			$this->smartyObj->display("index.html");
		}
	}

 ?>