<?php
session_start();
class BookingController
{

   public function index($id)
   {
     
            
      if (isset($_POST['submit'])) {
         $db = new cruise();
    
         $data['ports'] = $db->getAllPorts();
         $data['ships'] = $db->getAllShips();
         $data['cruises'] = $db->queryPaginated($id); 
        
       $data['cruises'] = $db->filtre($_POST['port'], $_POST['date'], $_POST['ship']);
      
         $data['total_pages']=$db->getCount();
         
         View::load('booking',$data);
         
      } else if (empty($_POST['submit'])) {
         $db = new cruise();
         $data['cruises'] = $db->queryPaginated($id);
         $data['ports'] = $db->getAllPorts();
         $data['ships'] = $db->getAllShips();
         $data['total_pages']=$db->getCount();

         View::load('booking', $data);
      }





      
   }







}

?>