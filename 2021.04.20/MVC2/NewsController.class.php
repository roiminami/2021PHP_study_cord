<?php 
require_once("baseController.class.php");
final class newsController extends baseController{
	function index()
	{
		$NewsModel = FactoryModel::getIncetance("NewsModel");
		$showIndex = $NewsModel->index();
		include "NewsIndexView.html";
	}
	function add()
	{
		include 'NewsAddView.html';
	}
	function insert()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->insert($_POST)) 
		{
			$this->jump("okok");
		}
	}
	function edit()
	{
		include 'NewsEditView.html';
	}
	function update()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->update($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	function delete()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->delete($_GET['id'])) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
}
	require_once("FactoryModel.class.php");
	
	$a = $_GET['a'] ? $_GET['a'] : "index";
	$contollerObj = new newsController;
	$contollerObj->$a();
	
		
 ?>
	
