<?php 

class DashbordController {


    public function index() { 
        $db= new cruise();
        $data['ports']=$db->getAllPorts();
        $data['ships']=$db->getAllShips();
        View::load('dashbord',$data);
}



public function addport(){

    if(isset($_POST['submit'])){

    $port = new cruise();
    $port->ajouteport($_POST['country']);
    header("location:".url2('dashbord/index'));

    }else{
      echo "ERROR";
    }
    


   }
   public function addship(){

    if(isset($_POST['submit'])){

    $ship = new cruise();
    $ship->ajouteship($_POST['name'],$_POST['rooms'],$_POST['places']);
    header("location:".url2('dashbord/index'));
   

    }else{
      echo "ERROR";
    }
    


   }

   public function deleteport($id)
   {
      

$delete=new cruise();

$delete->deleteport($id);


}
public function deleteship($id)
   {
      

$delete=new cruise();

$delete->deleteship($id);


}
}

?>