<?php 
	require_once("Db.class.php");
	class StudentModel
	{
		private $Db;
		public function __construct()
		{
			$array = array(
			'host'=>'localhost',
			'admin' =>'root',
			'pass' =>'root',
			'db_Name'=>'MVC',
			'charset' =>'utf8');
			$this->Db = Db::getInstance($array);
		    
		}
		//显示全部
		public function index()
		{
			return $this->Db->fetchAll("select * from Student",1);
		}
		public function insert($post)
		{
			foreach($post as $key => $value) 
			{
				$p.=$key.",";
				$s.="'$value',";
			}
			$p = rtrim($p,",");
			$s = rtrim($s,",");
			$sql = "INSERT INTO Student ($p)
                       VALUES
                       ($s);";
            print_r($sql);
			return $this->Db->exec($sql);
		}
		public function update($post)
		{
			$sql="UPDATE Student SET name='$post[name]', sex='$post[sex]',age=$post[age] WHERE id=$_GET[id]";
			return $this->Db->exec($sql);
		}
		public function delete($id)
		{
			$sql="DELETE FROM Student WHERE id=$id";
			return $this->Db->exec($sql);
		}
	}
 ?>