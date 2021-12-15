<?php 
//实例:打开已存在文件
    $filename="./test_pickture.jpg";
    $handle = fopen($filename, 'rb');
    $str = fread($handle,filesize($filename));
    header("content-type:image/jpg;charset=utf-8");
    echo "$str<br>";
    fclose($handle);
    var_dump($handle);
 ?>