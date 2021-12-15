<?php 
final class studentController extends baseController{
	function index()
	{
		$StudentModel = new StudentModel;
		$showIndex = $StudentModel->index();
		include VIEW_PATH."Index.html";
	}
	function add()
	{
		include VIEW_PATH.'Add.html';
	}
	function insert()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->insert($_POST)) 
		{
			$this->jump("okok",1,"?p=Admin");
		}
	}
	function edit()
	{
		include VIEW_PATH.'/Edit.html';
	}
	function update()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->update($_POST)) 
		{
			$this->jump("okok",2,"?p=Admin");
		}
	}
	function delete()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->delete($_GET['id'])) 
		{
			$this->jump("okok",2,"?p=Admin");
		}
	}
}
		
 ?>
	
