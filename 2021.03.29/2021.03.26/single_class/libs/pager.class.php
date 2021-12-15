<?php 
    final class pager
    {
        private $page;
        private $pages;

        public function __construct($page,$pages)
        {
            $this->page = $page;
            $this->pages = $pages;
        }

        public function fenye()
        {
            $start = $this->page-5;
            $end   = $this->page+4;

            if ($this->page>=6&& $this->page<$this->pages-5) 
            {
                for ($i=$start; $i <= $end ; $i++) 
                { 
                    if ($i==$this->page) 
                    {
                        $str.="<span>$i</span>";   
                    }
                    else  
                    {
                    $str.= "<a href='?page={$i}'>$i</a>";
                    }
                }
                return $str;
            }
            if ($this->page<6) 
            {
                for ($i=1; $i <=$this->pages ; $i++) 
                { 
                    if ($i==$this->page) 
                    {
                        $str.="<span>$i</span>";   
                    }
                    else  
                    {
                   $str.= "<a href='?page={$i}'>$i</a>";
                     }
                }
                return $str;
            }
            elseif ($this->page >= $this->pages-5) 
            {
                $start = $this->pages-9;
                for ($i=$start; $i <= $this->pages; $i++) 
                { 
                    if ($i==$this->page) 
                    {
                        $str.="<span>$i</span>";   
                    }
                    else  
                    {
                        $str.= "<a href='?page={$i}>$i'</a>";
                    }
                    
                }
                return $str;
            }
        }

    }
 ?>
