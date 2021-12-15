<?php 
final class newsController extends baseController{
	function index()
	{
		$NewsModel = FactoryModel::getIncetance("NewsModel");
		$showIndex = $NewsModel->index();
		include VIEW_PATH."Index.html";
	}
	function add()
	{
		include VIEW_PATH.'Add.html';
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
		include VIEW_PATH.'Edit.html';
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
	
