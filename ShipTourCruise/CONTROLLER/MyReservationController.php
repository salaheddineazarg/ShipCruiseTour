<?php
session_start();

    class MyReservationController {
     
        public function index($id){
        $db = new cruise();
        
         
        $data['myreserve'] = $db->getReservation($id);
        
        View::load('myReservation',$data);




        
        }
        public function RemoveToken($id){

            $remove= new token();
          $data =$remove->deletereserv($id);
          if($data){

            header("location:".$_SERVER['HTTP_REFERER']);
             $_SESSION['request']=true;
          }else{

            header("location:".$_SERVER['HTTP_REFERER']);
            $_SESSION['request']='cant';
          }

        
      
        }






    }



?>