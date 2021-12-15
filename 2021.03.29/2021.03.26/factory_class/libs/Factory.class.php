<?php 
//定义形状的工厂类:生产不同形状对象的工厂
class Factory
{
    public static function getInstance($className)
    {
    //根据传递的不同类名参数,返回不同类对象
    switch ($className) 
    {
        case 'Rectangle':
            return new Rectangle();
            break;
        case 'Circle':
            return new Circle();
            break;
        case 'Line':
        
            return new Line();
            break;
        default:
            return null;
            break;
    }
}  }
 ?>
