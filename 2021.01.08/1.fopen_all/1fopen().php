<?php 
//实例:打开已存在文件
    $filename="./test.txt";
    $handle = fopen($filename, 'rb');
    $str = fread($handle,1234);
    echo "$str<br>";
    fclose($handle);
    var_dump($handle);
 ?>