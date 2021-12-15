<?php 
	spl_autoload_register(function($className)
	{
		$arr = array(
			"Frame/$className.class.php",
			"App/".PLAT."/Model/$className.class.php",
			"App/".PLAT."/Controller/$className.class.php"
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
	$p = $_GET['p'] ? $_GET['p'] : "Home";
	define("PLAT",$p);
	$c = $_GET['c'] ? $_GET['c'] : "Student";
	$a = $_GET['a'] ? $_GET['a'] : "index";
	$c = $c."Controller";
	$contollerObj = new $c;
	$contollerObj->$a();
	
	
 ?>