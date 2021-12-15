<?php 
final class studentController{
	function index()
	{
		$StudentModel = new StudentModel;
		$showIndex = $StudentModel->index();
		include "View/Student/Index.html";
	}
	function add()
	{
		include 'View/Student/Add.html';
	}
	function insert()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->insert($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	function edit()
	{
		include 'View/Student/Edit.html';
	}
	function update()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->update($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	function delete()
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->delete($_GET['id'])) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
}
		
 ?>
	
