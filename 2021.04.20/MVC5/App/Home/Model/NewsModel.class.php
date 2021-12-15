<?php 
	class NewsModel extends baseModel
	{
		
		//显示全部
		public function index()
		{
			return $this->Db->fetchAll("select * from News",1);
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
			$sql = "INSERT INTO News ($p)
                       VALUES
                       ($s);";
            print_r($sql);
			return $this->Db->exec($sql);
		}
		public function update($post)
		{
			$sql="UPDATE News SET title='$post[title]', hits='$post[hits]',contents='$post[contents]' WHERE id=$_GET[id]";
			return $this->Db->exec($sql);
		}
		public function delete($id)
		{
			$sql="DELETE FROM News WHERE id=$id";
			return $this->Db->exec($sql);
		}
	}
 ?>