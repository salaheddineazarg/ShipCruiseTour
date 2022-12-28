<?php

class   CruiseController
{
    public function index(){
     $db= new cruise();
     $data['cruises']=$db->getAllProducts();
     View::load("booking",$data);
    }
}
?> 