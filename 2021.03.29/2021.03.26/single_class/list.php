<?php 
    require_once('conn.php');
    $page = isset($_GET['page'])? $_GET['page'] :1 ;
     $records = $db->records('select * from user');
     $showrows = 10;
     $pages = ceil($records/$showrows);
     $star=$page-1*$show;
    $fetchall = $db->fetchall("select * from user order by id desc limit {$star} ,{$showrows}",1);
   $pager = new pager($page,$pages);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生情報管理システム</title>
<script type="text/javascript"> 
       function confirmdel(id)
       {
        if (window.confirm("本当に削除しますか？")) 
        {
            　location.href ="./delete.php?id="+id;
        }
       }  
</script>
<style>
    .pagecell a{padding:3px 8px;text-decoration: none;margin:10px 3px;
        border: 1px solid black;}
    .pagecell a:hover{padding:3px 8px;text-decoration: none;margin:10px 3px;
        border: 1px solid red;}

</style>

</head>

<body>
    <div style="text-align:center;padding-bottom: 10px;">
        <h2>学生情報管理システム</h2>
        <a href="">学生情報添付</a>
        トータル <font color="red"><?php echo $records; ?></font> 名学生がアップされてあります。
        <table width="500px" border="1" bordercolor='#ccc' cellpadding="5" align="center">
            <tr bgcolor="#f0f0f0">
                <th>id番号</th>
                <th>名前</th>
                <th>暗証番号</th>　
                <th>操作</th>
            </tr>
            <?php
                foreach ($fetchall as $key => $value) 
                { 
                   ?>
            <tr>
                
                <td><?php echo $value[0]; ?></td>
                <td><?php echo $value[1]; ?></td>
                <td><?php echo $value[2]; ?></td>
                <td>
                    <a href=".edit.php">変更</a>
                    <a href="javascript:void(0)" onclick="confirmdel(<?php echo "$value[0]"; ?>)">削除</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
    <div align="center" class="pagecell">
        <?php echo $pager->fenye(); ?>
    </div>
</body>
</html>