<?php 
  $dirname = "./testname";
  $newname = "./test2name";
  if (rename($dirname, $newname)) 
  {
     echo "重命名成功！";
  }
  $dirname2 = "./test2name";
  $newname2 = "./../3.chmod_all/test2name";
  if (rename($dirname2,$newname2)) 
  {
     echo "移到文件成功！";
  }

 ?>