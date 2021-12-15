<?php 
    $filename = "./zhansan.txt";
    //以追加方式打开句柄
    $handle = fopen($filename, 'ab');
    $write_file = "10040,李武,男,28,高中,4000,500,山西省";
    if(fwrite($handle,$write_file))
    {
        echo "追加成功";
    }
 ?>