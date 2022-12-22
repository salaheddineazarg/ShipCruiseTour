<?php 
   
class HomeController {
 public function index() 

 {  
    $data['title']="home page";
    View::load('home',$data);
   
    
 }
}




?>