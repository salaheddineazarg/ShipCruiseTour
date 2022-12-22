<?php

class ReservationController
{
    public function index(){
     
    
        $data['title']="login page";
        View::load('reservation',$data);
    }
}
?> 