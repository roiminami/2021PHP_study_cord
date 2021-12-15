<?php 
	require_once("NewsModel.class.php");
	require_once("StudentModel.class.php");
	final class FactoryModel
	{
		
		public static function getIncetance($argument)
		{
			return new $argument();
		}
	}
 ?>