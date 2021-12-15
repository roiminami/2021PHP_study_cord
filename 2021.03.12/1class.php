<?php 
	class Student
	{
		const TITLE ="<h2>PHP第69期就业班</h2>";

		private static $count=0;

		private $name;
		private $sex;
		private $age;
		
		public function __construct($name,$sex,$age)
		{
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
			self::$count++;
			$this::showinfo();
		}
		private function showinfo()
		{
			$str=self::TITLE;
			$str.="<br>";
			$str.="姓名:{$this->name}";
			$str.="<br>";
			$str.="性别:{$this->sex}";
			$str.="<br>";
			$str.="年龄:{$this->age}";
			$str.="<br>";
			$str.="当前有".self::$count."个学生";
			echo $str;
		}
		public function __destruct()
		{
			self::$count--;
		}
	}
		
		
	$obj= new Student("卢易南","男",24);
	$obj= new Student("卢易南","男",24);
 ?>

