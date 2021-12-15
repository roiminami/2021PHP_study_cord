<?php 
    $filename = "./zhansan.txt";
    $handle = fopen($filename, 'rd');
    $line = fgets($handle);
    echo "$line";
    echo "来一个循环输出<br>";
    while ($line = fgets($handle)) 
    {
        echo "$line<br>";
    }

 ?>