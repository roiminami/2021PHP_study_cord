<?php 
final class newsController extends baseController{
	function index()
	{
		$NewsModel = FactoryModel::getIncetance("NewsModel");
		$showIndex = $NewsModel->index();
		include "View/News/Index.html";
	}
	function add()
	{
		include 'View/News/Add.html';
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
		include 'View/News/Edit.html';
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

		
 ?>
	
