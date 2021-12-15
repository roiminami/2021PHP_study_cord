<?php 
	abstract class baseModel
	{
		
		public static function jump($message,$time=1,$addr="?")
		{
			echo "$message";
			header("refresh:{$time};url='{$addr}'");
			die();
		}
	}
 ?>