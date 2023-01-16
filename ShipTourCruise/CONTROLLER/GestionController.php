<?php 
   session_start();
class GestionController  {
  
 public function index() 

 {
    if ($_SESSION['role'] != 'admin') {
      header('location:' . url2('login/index'));
    } else if ($_SESSION['role'] == 'client') {
      header('location:' . url2('home'));
    }
   
   $db= new cruise();
    $data['cruises']=$db->getAllCruises();
    $data['ports']=$db->getAllPorts();
    $data['ships']=$db->getAllShips();
  

    View::load('gestion',$data);

      
   
    
 
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
     $cruises->insertcruise($_POST['name'],$_POST['desc'], $_POST['price'],$newImageName,$_POST['nights'],$_POST['port_depart'],$_POST['date'],$_POST['datefinal'],$_POST['ship'],$_POST['checkport']);
     

      header("location:".url2('gestion/index'));
 }
 

}
// ----------------------------------------------------------------------------------------------

public function delete($id)
   {
      

$delete=new cruise();

$delete->deletecruise($id);


}



   
  //  ----------------------------------------------------------------------------------------------------
  public function update($id)
  {
     $db= new cruise();
     $data['getrow']=$db->getrow($id);
     $data['ports']=$db->getAllPorts();
      View::load('update',$data);
      
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
   public function logout () {
    $_SESSION['role'] = false;

    header("location:".url2('home'));
   }

 

}


?>