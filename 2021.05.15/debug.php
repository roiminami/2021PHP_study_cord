<?php 
	
	class Error1
	{
		protected $debug;
		function __construct($debug=true)
		{
			$this->debug=$debug;
		}
		public function error()
		{
			error_reporting(0);
			set_error_handler([$this,'handle'],E_ALL | E_STRICT);
		}
		public function handle($code,$error,$file,$link)
		{
			switch ($code) {
				case E_NOTICE:
				if ($this->debug) 
					{	echo "提示型错误<br>";
						echo "错误代码:$code<br>";
						echo "错误等级:$error<br>";
						echo "错误文件:$file<br>";
						echo "错误行号:$link<br>";}
				else{
					$msg = "错误代码:$code<br>错误等级:$error<br>错误文件:$file<br>错误行号:$link<br>";
					$file ="logs/".date("Y_m_d").".php";
					error_log(date('[c]').$msg,3,$file);
					echo "已经保存到日志";
				}break;
				default:
					if ($this->debug) 
					{	echo "提示型以外的错误<br>";
						echo "错误代码:$code<br>";
						echo "错误等级:$error<br>";
						echo "错误文件:$file<br>";
						echo "错误行号:$link<br>";}
				else{
					echo "保存到日志";
				}break;
			}
			
		}
	}
	
 ?>