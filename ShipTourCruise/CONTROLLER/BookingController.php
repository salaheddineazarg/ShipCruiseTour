<?php
class BookingController {
   public function index() 
  
   {  
      $db= new cruise();
   $data['cruises']=$db->getAllCruises();
     
   View::load('booking',$data);
      
   }
  }
  ?>