<?php 
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT_PATH',getcwd().DS);
	define('APP_PATH',ROOT_PATH."Admin".DS);

	require_once(ROOT_PATH.'Frame/Frame.class.php');
	Frame\Frame::run();
 ?>