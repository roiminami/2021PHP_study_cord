<?php 
    spl_autoload_register(
        function($className)
        {
            $fileName =__DIR__."/libs/$className.class.php";
            if (file_exists($fileName)) require_once($fileName);
        }
    );
    $arr = array(
        'host'=>'localhost',
        'adname'=>'root',
        'pass'=> 'root',
        'db_name'=>'minami',
        'charset'=>'utf8'
    );
    $db = Db::getInstance($arr);
   ?>