<?php 
    $dirname = "./../1.mkfile_all/testname/test1/test2";
    if (file_exists($dirname))
    {
        if (is_dir($dirname)) 
        {
            if(chmod($dirname,0777))
            {
                echo "目录权限更改成功！";
            }
            else
            {
                echo "目录权限更改失败！";
            }
        }
        else
        {
            echo "存在的东西不是目录";
        }
    }
    else
    {
        echo "此目录不存在";
    }

 ?>