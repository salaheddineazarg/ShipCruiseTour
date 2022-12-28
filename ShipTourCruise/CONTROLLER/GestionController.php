<?php 
   session_start();
class GestionController  {
  
 public function index() 

 { 
  
   
   $db= new cruise();
    $data['cruises']=$db->getAllCruises();
    $data1['ports']=$db->getAllPorts();
    $data2['ships']=$db->getAllShips();

    View::load('gestion',$data,$data1,$data2);
      
   
    
 
}
//  -----------------------------------------------


// -------------------------------------------------------
 public function add ()
 { 
   if(isset($_POST['submitadd']))
   {
  
   

      if($_FILES["imageadd"]["error"] === 4){
        echo "<script>alert('Image Does Not Exist');</script>";
    }
    else{
        $FileName=$_FILES["imageadd"]["name"];
        $tmpName=$_FILES["imageadd"]["tmp_name"];
        $validExtisin=['jpg','jpeg','png'];
        $imageEx=explode('.',$FileName);
        $imageEx=strtolower(end($imageEx));
        if(! in_array($imageEx,$validExtisin)){
            echo 
            "<script>alert('Invalid  Image Extension');</script>";
        }
        else{
            $newImageName=uniqid();

            $newImageName.='.'. $imageEx;
            move_uploaded_file($tmpName,'./Public/IMAGE2/'.$newImageName);
        
   }
     }
     $cruises=new cruise();
     $cruises->insertcruise($_POST['name'],$_POST['desc'], $_POST['price'],$newImageName,$_POST['nights'],$_POST['port_depart'],$_POST['date'],$_POST['datefinale'],$_POST['checkport']);
      header("location:".url2('gestion/index'));
 }
 

}
// ----------------------------------------------------------------------------------------------

public function delete($id)
   {
      

$delete=new cruise();

$delete->deleteproduct($id);


}


   
  //  ----------------------------------------------------------------------------------------------------
  public function update($id)
  {
     $db= new cruise();
     $data['getrow']=$db->getrow($id);
     $data1['ports']=$db->getAllPorts();
      View::load('update',$data,$data1);
      
  }
  // ----------------------------------------------------------------------------------------------------------

  public function updateproducts($id){

 
  if(isset($_POST['submit'])){
    $update =new cruise();

     if($_FILES["image"]["size"]>0){
        
    $tmpName=$_FILES["image"]["tmp_name"];
    $FileName=$_FILES["image"]["name"];
    $imageEx=explode('.',$FileName);
    $imageEx=strtolower(end($imageEx));
    $newImageName=uniqid();
     $newImageName.='.'. $imageEx;
     move_uploaded_file($tmpName,'./Public/IMAGE2/'.$newImageName); 

     

    $update->edit($id,$_POST['name'], $_POST['price'],$newImageName,$_POST['nights'],$_POST['port_depart'],$_POST['date'],$_POST['checkport']);

    }
    else{
        $update->editwithoutimage($id,$_POST['name'], $_POST['price'],$_POST['nights'],$_POST['port_depart'],$_POST['date'],$_POST['checkport']);
    }
 
     
    
    header("Location:".url2('gestion/index') );
}
   }

   public function addport(){

    if(isset($_POST['submit'])){

    $port = new cruise();
    $port->ajouteport($_POST['country']);
    header("location:".url2('gestion/index'));

    }else{
      echo "ERROR";
    }
    


   }
   public function addship(){

    if(isset($_POST['submit'])){

    $ship = new cruise();
    $ship->ajouteship($_POST['name'],$_POST['rooms'],$_POST['places']);
    header("location:".url2('gestion/index'));
   

    }else{
      echo "ERROR";
    }
    


   }
}


?>