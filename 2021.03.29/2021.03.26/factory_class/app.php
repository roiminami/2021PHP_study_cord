<?php 
    spl_autoload_register(function ($className)
    {
        $fileName = __DIR__."/libs/$className.class.php";
        if (file_exists($fileName)) 
        {
            echo $fileName;
            require_once($fileName);
        }
        
    }    
);
    $rectangle =Factory::getInstance("Rectangle");
    $rectangle->draw();
    $rectangle =Factory::getInstance("Circle");
    $rectangle->draw();
     $rectangle =Factory::getInstance("Line");
    $rectangle->draw();

 ?>