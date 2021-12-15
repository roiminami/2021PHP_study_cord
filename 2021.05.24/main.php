<?php 
	/**
	 * 
	 */
	class myErr extends Exception
	{
		public function __toString()
		{
			return "nihaodfajslkfjas";
		}
	}
	try {
		throw new myErr("抛", 1);
		
	} catch (Exception $e) {
		echo "$e";
	}
 ?>