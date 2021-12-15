<?php 

    $pathname = "./testname/test1/test2";
    if(file_exists($pathname))
    {
        echo "您要创建的目录或文件已经存在,进入判断,如果是文件则继续创建<br>";
        if (is_dir($pathname)) 
        {
            echo "存在的文件为目录,不执行创建<br>";
        }
        else
        {
            echo "存在的文件不是目录,执行创建<br>";
            if (mkdir($pathname,0777,true)) 
            {
                echo "创建成功!<br>";
            }
        }
    }
    else
    {
        if (mkdir($pathname,0777,true)) 
        {
            echo "创建成功!<br>";
        }
    }
 ?>    
