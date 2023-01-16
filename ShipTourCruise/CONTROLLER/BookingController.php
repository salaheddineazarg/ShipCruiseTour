<?php
class BookingController {
 
   public function index() 
  
   {       
      if(isset($_POST['submit'])) {
         $db=new cruise();
         $data['cruises'] =$db->filtre($_POST['port'],$_POST['date'],$_POST['ship']) ;
         $data['ports']=$db->getAllPorts();
         $data['ships']=$db->getAllShips();
         View::load('booking',$data);
     
       }else if(empty($_POST['submit'])){ 
         $db= new cruise();
         $data['cruises']=$db->getAllCruises();
         $data['ports']=$db->getAllPorts();
         $data['ships']=$db->getAllShips();
        
         View::load('booking',$data);
       }
      }


    
    
  
     
      
   }
  
  ?>