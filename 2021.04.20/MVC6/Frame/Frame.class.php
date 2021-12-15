<?php 
	final class Frame
	{
		
		public static function run()
		{
			self::initConfig();
			self::initRoute();
			self::initConst();
			self::initAutoload();
			self::initDispatch();
		}
		private static function initConfig()
		{
			$GLOBALS['config'] = require_once('./App/Conf/config.php');
		}
		private static function initRoute()
		{
			$p = $_GET['p'] ? $_GET['p'] : $GLOBALS['config']['default_plat'];
			define("PLAT",$p);
			$c = $_GET['c'] ? $_GET['c'] : $GLOBALS['config']['default_ctrl'];
			$a = $_GET['a'] ? $_GET['a'] : $GLOBALS['config']['default_act'];
			define("CTRL", $c);
			define("ACT", $a);
		}

		private static function initConst()
		{
			define("DS",DIRECTORY_SEPARATOR);
			define("ROOT_PATH", getcwd().DS);
			define('FRAME_PATH',ROOT_PATH."Frame".DS);
			define("MODEL_PATH",ROOT_PATH."App".DS.PLAT.DS."Model".DS);
			define("CTRL_PATH", ROOT_PATH."App".DS.PLAT.DS."Controller".DS);	
			define("VIEW_PATH", ROOT_PATH."App".DS.PLAT.DS."View".DS.CTRL.DS);
		}
		private static function initAutoload()
		{
			spl_autoload_register(function($className)
			{
			$arr = array(
			FRAME_PATH."$className.class.php",
			MODEL_PATH."$className.class.php",
			CTRL_PATH."$className.class.php"
			);
			foreach ($arr as $key => $fileWay) 
				{
			if (file_exists($fileWay)) 
				{
				require_once($fileWay);
				echo "$fileWay<br>";
				}
				}
			});
		}
		private static function initDispatch()
		{
			$c = CTRL."Controller";
			$contollerObj = new $c;
			$a = ACT;
			$contollerObj->$a();
		}


	}
 ?>