<?php 
	namespace Frame;
	class Frame
	{
		public static function run()
		{
			self::initConfig();
			self::initDefault();
			self::initConst();
			self::initAutoloads();
			self::initNew();
		}
		private static function initConfig()
		{
			$GLOBALS['config'] = require_once(APP_PATH.'Conf'.DS.'Config.php');
		}
		private static function initDefault()
		{
			$p = $GLOBALS['config']['default_platfrom'];
			$c = $_GET['c'] ? $_GET['c']:$GLOBALS['config']['default_ctrl'];
			$a = $_GET['a'] ?$_GET['a']: $GLOBALS['config']['default_act'];
			define('PLAT', $p);
			define('CTRL', $c);
			define('ACT', $a);
		}
		private static function initConst()
		{
			define('VIEW_PATH',APP_PATH.'View'.DS);
		}
		private static function initAutoloads()
		{
			spl_autoload_register(function($className)
			{
				$fileName=str_replace('\\',DS,$className).'.class.php';
				if (file_exists($fileName)) {
					require_once $fileName;
				}
				echo $fileName."<br>";
			}
			);
			
		}
		private static function initNew()
		{
			$c=PLAT.'\\Controller\\'.CTRL.'Controller';
			$ControllerObj = new $c;
			$a = ACT;
			$ControllerObj->$a();
		}



	}
 ?>