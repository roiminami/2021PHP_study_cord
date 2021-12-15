<?php 
final class newsController extends baseController{
	function index()
	{
		$NewsModel = FactoryModel::getIncetance("NewsModel");
		$showIndex = $NewsModel->index();
		include "App/Home/View/News/Index.html";
	}
	function add()
	{
		include 'App/Home/View/News/Add.html';
	}
	function insert()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->insert($_POST)) 
		{
			$this->jump("okok",1,"?c=News");
		}
	}
	function edit()
	{
		include 'App/Home/View/News/Edit.html';
	}
	function update()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->update($_POST)) 
		{
			$this->jump("okok",1,"?c=News");
		}
	}
	function delete()
	{
		$NewsModel = $NewsModel = FactoryModel::getIncetance("NewsModel");
		if ($NewsModel->delete($_GET['id'])) 
		{
			$this->jump("okok",1,"?c=News");
		}
	}
}

		
 ?>
	
