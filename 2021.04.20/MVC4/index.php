<?php 
	$p = $_GET['p'] ? $_GET['p'] : "Home";
	require_once("Frame/baseController.class.php");
	require_once("Frame/FactoryModel.class.php");
	require_once("Frame/Db.class.php");
	require_once("Frame/baseModel.class.php");
	require_once("App/$p/Model/StudentModel.class.php");
	require_once("App/$p/Model/NewsModel.class.php");
	require_once("App/$p/Controller/StudentController.class.php");
	require_once("App/$p/Controller/NewsController.class.php");



	$c = $_GET['c'] ? $_GET['c'] : "Student";
	$a = $_GET['a'] ? $_GET['a'] : "index";
	$c = $c."Controller";
	$contollerObj = new $c;
	$contollerObj->$a();
	
	
 ?>