<?php 
	class StudentModel extends baseModel
	{
		
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