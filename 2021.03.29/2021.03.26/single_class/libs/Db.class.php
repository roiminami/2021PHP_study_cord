<?php 
    class Db 
    {
        private static $obj = null;
        private $host;
        private $adname;
        private $pass;
        private $db_name;
        private $charset;
        public $link;

        private function __construct($argument)
        {
            $this->host = $argument['host'];
            $this->adname = $argument['adname'];
            $this->pass = $argument['pass'];
            $this->db_name = $argument['db_name'];
            $this->charset = $argument['charset'];

            $this->conn();
            $this->select_db();
            $this->charset();
        }

        public function exec($sql)
        {
            $sql = strtolower($sql);
            if (substr($sql,0,6)=="select") 
            {
                echo "不能执行select语句";
                die();
            }
            return mysqli_query($this->link,$sql) ;
        }

        private function query($sql)
        {
            $sql = strtolower($sql);
            if (substr($sql,0,6)=="select") 
            {
                return mysqli_query($this->link,$sql);
            }
            else
            {
                echo "只能执行select语句";
                die();
            }
        }
        public function fetchOne($sql,$type = 3)
        {
             $types = array(1=>MYSQLI_NUM,2=>MYSQLI_BOTH,3=>MYSQLI_ASSOC);
             $result = $this->query($sql);
             return mysqli_fetch_array($result,$types[$type]);
        }
        public function fetchall($sql,$type =3)
        {
            $types = array(1=>MYSQLI_NUM,2=>MYSQLI_BOTH,3=>MYSQLI_ASSOC);
            $result = $this->query($sql);
            return mysqli_fetch_all($result,$types[$type]);
        }

        public function records($sql)
        {
            $result = $this->query($sql);
            return MYSQLI_NUM_rows($result);
        }

        private function conn(){
            if (!$this->link=mysqli_connect($this->host,$this->adname,$this->pass))
                echo "连接服务器失败！";
        }

        private function select_db(){
            if (!mysqli_select_db($this->link,$this->db_name))
                echo "连接数据库失败！";
        }

        private function charset(){
            if (!mysqli_set_charset($this->link,$this->charset))
                echo "更改字符串失败！";
        }

        private function __clone(){}

        public static function getInstance($value='')
        {
            if (!self::$obj instanceof self) 
            {
                 $obj = new self($value);
            } 
            return $obj;
        } 

    }


 ?>