<?php 
//定义线形类，并且实现接口
    class Line implements shape
    {
    	//重写draw方法
    	public function draw()
    	{
    		echo "正在绘制线条！";
    	}
    }    
 ?>