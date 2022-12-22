<?php 

class controller
{
    protected $controller ="HomeController";
    protected $action ="index";
    protected $pramas =[];

   //---------------------------------------
    public function __Construct()
    {
     $this->prepareUrl();
     $this->render();
      
     } 
   
    //---------------------------------------
     private function prepareUrl()
     {
      $url=$_SERVER['REQUEST_URI'];
    
       
      if(isset($url))
      {   
          $url= explode("/",$url);
         
          // CONTROLLER
        if(!empty($url[2])){
           $this->controller = $url[2] ;
           $this->controller = ucwords ($url[2])."Controller" ;
           
        }
        else{
        $this->controller= "HomeController";
      }
      // METHOD
      if(!empty($url[3])){
        $this->action = $url[3] ;
        
     }
     else{
     $this->action= "index";

   }
     unset($url[0],$url[1],$url[2],$url[3]);
      // ID
     if(!empty($url)){
      $this->params=array_values($url);
     }else{
      $this->params=[];
     }
   

      }
    
     }

     private function render()
     {
      if(class_exists($this->controller))
      {
        $controller =new $this->controller;
        if(method_exists($controller,$this->action))
        {
         call_user_func_array([$controller,$this->action],$this->params);
        }else
        {
          echo "Thisss .'$this->action'. not exit";
        }

      }else
      {
        echo "Thisss .'$this->controller'. not exit";

     }

     }
 }


?>