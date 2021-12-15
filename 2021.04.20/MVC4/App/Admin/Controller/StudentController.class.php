<?php 
final class studentController extends baseController{
	function index()
	{
		$StudentModel = new StudentModel;
		$showIndex = $StudentModel->index();
		include "App/Admin/View/Student/Index.html";
	}
	function add()
	{
		include 'App/Admin/View/Student/Add.html';
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
		include 'App/Admin/View/Student/Edit.html';
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
	
