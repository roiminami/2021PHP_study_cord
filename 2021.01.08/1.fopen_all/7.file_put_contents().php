<?php 
    //将百度网页抓出到本地
    $filename = "http://baidu.com";
    //读取网页内容到字符串中
    $arr = file_get_contents($filename);
    //另存到本本地文件
    $filename1= "./put_baidu.html";
    if(file_put_contents($filename1,$arr))
    {
        echo "另存成功!";
    }
 ?>