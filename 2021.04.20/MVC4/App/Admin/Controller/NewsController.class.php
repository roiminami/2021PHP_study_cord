<?php 
final class newsController extends baseController{
	function index()
	{
		$NewsModel = FactoryModel::getIncetance("NewsModel");
		$showIndex = $NewsModel->index();
		include "App/Admin/View/News/Index.html";
	}
	function add()
	{
		include 'App/Admin/View/News/Add.html';
	}
	function insert()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->insert($_POST)) 
		{
			$this->jump("okok",2,"?p=Admin&c=News");
		}
	}
	function edit()
	{
		include 'App/Admin/View/News/Edit.html';
	}
	function update()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->update($_POST)) 
		{
			$this->jump("okok",2,"?p=Admin&c=News");
		}
	}
	function delete()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->delete($_GET['id'])) 
		{
			$this->jump("okok",2,"?p=Admin&c=News");
		}
	}
}

		
 ?>
	
