<?php 
	namespace Frame\Libs;
	abstract class baceController
	{
		protected $smartyObj;
		public function __construct()
		{
			$smartyObj = new \Frame\Vendor\Smarty;
			$smartyObj->left_delimiter="<{";
			$smartyObj->right_delimiter="}>";
			$smartyObj->setCompileDir(sys_get_temp_dir().DS.'view_c'.DS);
			$smartyObj->setTemplateDir(VIEW_PATH);
			$this->smartyObj=$smartyObj;
		}
	}
 ?>