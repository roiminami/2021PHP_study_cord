<?php 
    $filename="zhansan.txt";
    $arr = file($filename);
    print_r($arr);
    $str="<table border='1' >";
    foreach ($arr as $value) 
    {
        $str.="<tr>";
        $arr1= explode(',',$value);
        foreach ($arr1 as $key => $value1) 
        {
            $str.="<td>$value1</td>";
        }
        $str.="</tr>";
    };
    $str.="</table>";
    echo "$str";


