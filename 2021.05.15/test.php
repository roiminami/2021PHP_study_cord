<?php 
	/**
	 * 
	 */
	class Debug
	{
		private $switch;
		public function __construct($switch)
		{
			$this->switch = $switch; 
		}

		public function err()
		{
			error_reporting(0);
			set_error_handler([$this,'getErr'],E_ALL|E_STRICT);
		}

		public function getErr($code,$error,$file,$line)
		{
			if ($this->switch) 
			{
				echo "在{$file}文件中，第{$line}行发生错误.";
			}
			else
			{
				$msg = date(['c'])."错误文件：{$file}$line";
				$file = "logs/".date("Y_m_d");
				if (error_log($msg,3,$file)) 
				{
					echo "文件运行错误，文件已经提交后台技术人员，请稍后再试";
				}
			}
		}
	}
	(new Debug(false))->err();
	echo $a;

?>