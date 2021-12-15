<?php 
    $dirname = "./../1.mkfile_all/testname/test1/test2";
    if(file_exists($dirname))
    {
        if (is_dir($dirname)) 
        {
            if(rmdir($dirname))
            {
              echo "删除成功！";  
            }
            else
            {
                echo "删除失败！";
            }
                
        }
        else
        {
            echo "要删除的目录不是目录";
        }
    }
    else
    {
        echo "要删除的目录不存在";
    }

 ?>