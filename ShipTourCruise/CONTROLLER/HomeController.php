<?php
session_start();
class HomeController {
 public function index() 

 {  
   $db= new cruise();
   $data['cruises']= $db->getTwoCruise();
   View::load('home',$data); 

   }
  
  
   
   
    
 }





?>