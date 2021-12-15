<?php 
    require_once('conn.php');
    $del_number = $_GET['id'];
    echo "$del_number";
    $sql = "DELETE FROM user WHERE id=$del_number";
    if ($db->exec($sql)) 
    {
        echo "削除出来ました。";
        header("refresh:3;url='list.php'");
    }
    else
    {
        echo "削除が失敗しました";
        header("refresh:3;url = 'delite.php'");

    }
    
  ?>