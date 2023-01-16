<?php 
   
class HomeController {
 public function index() 

 {  
   $db= new cruise();
   $twocruises=$db->getAllCruises();
   $i=0;
   $cruise=array();
   foreach($twocruises as $row){
      $cruise[$i]=$row;
      $i++;
      if($i>2){
         break;
      
         

      }else{
         $data['cruises']=$cruise;
      }
      

   }
  
  
    View::load('home',$data);
   
    
 }
}




?>