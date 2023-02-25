<?php
session_start();
class ReservationController
{

    public function index($id)
    {
        if(isset($_SESSION['role']) && $_SESSION['role'] == 'client') {


            $db = new cruise();
        $data['trajets'] = $db->getAllTrajet($id);
        $data['getrow'] = $db->getrow($id);
        $data['reservation'] = $db->getRooms();
        $data['login'] ="";


        View::load('reservation', $data);
        }
        $db = new cruise();
        $data['trajets'] = $db->getAllTrajet($id);
        $data['getrow'] = $db->getrow($id);
        $data['reservation'] = $db->getRooms();
        $data['login'] ="Please Go To Login";

        View::load('reservation', $data);
        

     
        
    }
   

    public function token()
    {
        
        if(isset($_POST['sumbitreserv'])){
          
        if ($_SESSION['role']=='client') {
         
          $id = $_POST['id_cruise'];

          $id_user=$_SESSION['user'];
           
        $price = explode('$',$_POST['priceTotal']);
        $reserv = new token();

    
       $reserv->addreservation($id_user,$id,$_POST['chambre'],$price[0]);

                header("location:" . url2('MyReservation/index/'.$id_user));
      
        }
        else{


            header("location:".$_SERVER['HTTP_REFERER']);
        }


        }else{
          
    
            header("location:".$_SERVER['HTTP_REFERER']);
        }
      
   

      
    
    }

    
}

?>