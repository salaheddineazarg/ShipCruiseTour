<?php

class ReservationController 
{
    public function index($id){
     
    
 
        $db= new cruise();
        $data['trajets']=$db->getAllTrajet($id);
        $data1['getrow']=$db->getrow($id);
        View::load('reservation',$data,$data1);
    }
    }

?> 