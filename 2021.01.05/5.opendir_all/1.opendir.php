
<?php 
    function show_all_dir($dirname)
    {
        $handle = opendir($dirname);
        while ($line = readdir($handle)) 
        {
            if ($line=='.'||$line=='..') 
            {
               continue;
            }
            echo "<ul>";
            echo "<li>$line";
            if (is_dir($dirname.'/'.$line)) 
            {
                show_all_dir($dirname.'/'.$line);
            }
             
        }
        echo "</li>"; 
        echo "</ul>";  
    }
    $dirname = "./../1.mkfile_all";
    show_all_dir($dirname);
?>

