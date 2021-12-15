<?php
	require_once('./Frame/Frame.class.php');
	Frame::run(); 


/**
	$p = $_GET['p'] ? $_GET['p'] : "Home";
	define("PLAT",$p);
	$c = $_GET['c'] ? $_GET['c'] : "Student";
	$a = $_GET['a'] ? $_GET['a'] : "index";
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT_PATH", getcwd().DS);
	define('FRAME_PATH',ROOT_PATH."Frame".DS);
	define("MODEL_PATH",ROOT_PATH."App".DS.PLAT.DS."Model".DS);
	define("CTRL_PATH", ROOT_PATH."App".DS.PLAT.DS."Controller".DS);	
	define("VIEW_PATH", ROOT_PATH."App".DS.PLAT.DS."View".DS.$c.DS);
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
	}
	);
	
	$c = $c."Controller";
	$contollerObj = new $c;
	$contollerObj->$a();
	
	**/
 ?>