<?php 
	final class FactoryModel
	{
		
		public static function getIncetance($argument)
		{
			return new $argument();
		}
	}
 ?>