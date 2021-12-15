<?php 
    $dirname = "./../1.mkfile_all/testname/test1/test2";
    $int = fileperms($dirname);
    $int8 = decoct($int);
    echo substr($int8,1);
 ?>