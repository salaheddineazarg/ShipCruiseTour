<?php 

class View
{
    public static function load($view_name,$view_data=[])
    {
        $file=view.$view_name.'.php';
        if(file_exists($file))
        {   
        extract($view_data);
       
         ob_start();
        require_once(view.$view_name.'.php');
     
        ob_end_flush();
        }else{
            echo "This view :".$view_name."does not exist";
        }
    
      
    }
}

?>