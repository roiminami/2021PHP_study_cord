<?php 
	require_once("Frame/baseController.class.php");
	require_once("Frame/FactoryModel.class.php");
	require_once("Frame/Db.class.php");
	require_once("Frame/baseModel.class.php");
	require_once("Model/StudentModel.class.php");
	require_once("Model/NewsModel.class.php");
	require_once("Controller/StudentController.class.php");
	require_once("Controller/NewsController.class.php");

	$c = $_GET['c'] ? $_GET['c'] : "Student";
	$a = $_GET['a'] ? $_GET['a'] : "index";
	$c = $c."Controller";
	$contollerObj = new $c;
	$contollerObj->$a();
	
	
 ?>