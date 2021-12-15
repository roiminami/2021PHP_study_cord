<?php 
	class production
	{
		private $name;
		private $price;

		protected function __construct($name1,$price2)
		{  
			$this->name  = $name1;
			$this->price = $price2;
		}
		protected function showinfo()
		{
			$str = "商品名称：".$this->name."<br>";
			$str.= "商品价格：".$this->price."<br>";
			return $str;
		}
	}
	class smartphone extends production
		{
			private $brand_name;
			private $chip_name;
			public function __construct($name2,$price2,$brand_name,$chip_name)
			{
				$this->brand_name = $brand_name;
				$this->chip_name = $chip_name;
				parent::__construct($name2,$price2);
			}
			
			public function showinfo()
			{
				$str = parent::showinfo();
				$str.= "手机品牌：".$this->brand_name."<br>";
				$str.= "手机芯片：".$this->chip_name."<br>";
				return $str;
			}
		}
		class book extends production
		{
			private $author;
			private $publish;
			public function __construct($name2,$price2,$author,$publish)
			{
				$this->brand_name = $publish;
				$this->chip_name = $publish;
				parent::__construct($name2,$price2);
			}
			
			public function showinfo()
			{
				$str = parent::showinfo();
				$str.= "书名：".$this->brand_name."<br>";
				$str.= "出版社：".$this->chip_name."<br>";
				return $str;
			}
		}
			 	$obj= new smartphone(1,2,3,4);
			 	echo $obj->showinfo();
			 	echo "<hr>";
			 	$obj= new book(1,2,3,4);
			 	echo $obj->showinfo();
 ?>