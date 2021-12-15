<?php 
final class studentController extends baseController{
	function index()
	{
		$StudentModel = new StudentModel;
		$showIndex = $StudentModel->index();
		include "App/Home/View/Student/Index.html";
	}
	function add()
	{
		include 'App/Home/View/Student/Add.html';
	}
	function insert()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->insert($_POST)) 
		{
			$this->jump("okok");
		}
	}
	function edit()
	{
		include 'App/Home/View/Student/Edit.html';
	}
	function update()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->update($_POST)) 
		{
			$this->jump("okok");
		}
	}
	function delete()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->delete($_GET['id'])) 
		{
			$this->jump("okok");
		}
	}
}
		
 ?>
	
