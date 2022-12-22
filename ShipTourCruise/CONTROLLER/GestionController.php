<?php 
   session_start();
class GestionController extends LoginController {
  
 public function index() 

 { 
  
   
   $db= new product();
    $data['products']=$db->getAllProducts();
   

       View::load('gestion',$data);
      
   
    
 
}
//  -----------------------------------------------
 public function add ()
 {
 
     View::load('add');
 }

// -------------------------------------------------------
 public function store ()
 { 
   if(isset($_POST['submit']))
   {
  
   

      if($_FILES["image"]["error"] === 4){
        echo "<script>alert('Image Does Not Exist');</script>";
    }
    else{
        $FileName=$_FILES["image"]["name"];
        $tmpName=$_FILES["image"]["tmp_name"];
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
     $products=new product;
     $products->insertproduct($_POST['name'],$newImageName, $_POST['price']);
     
     header("Location:index");
   sleep(1);
    echo "<script>alert('Invalid  Image Extension');</script>";
 }
 

}
// ----------------------------------------------------------------------------------------------

public function delete($id)
   {
      

$delete=new product;

$delete->deleteproduct($id);


}


   
  //  ----------------------------------------------------------------------------------------------------
  public function update($id)
  {
     $rowproduct= new product;
      $data['rowproduct']=$rowproduct->getrow($id) ;
      View::load('update',$data);
      
  }
  // ----------------------------------------------------------------------------------------------------------

  public function updateproducts($id){

 
  if(isset($_POST['updatesubmit'])){
    $update =new product;
   $nameupdate=$_POST['nameupdate'];
   $priceupdate=$_POST['updateprice'];
   
     
      
     if($_FILES["updateimage"]["size"]>0){
        
    $tmpName=$_FILES["updateimage"]["tmp_name"];
    $FileName=$_FILES["updateimage"]["name"];
    $imageEx=explode('.',$FileName);
    $imageEx=strtolower(end($imageEx));
    $newImageName=uniqid();
     $newImageName.='.'. $imageEx;
     move_uploaded_file($tmpName,'./Public/IMAGE2/'.$newImageName); 

     

    $update->edit($id,$nameupdate,$newImageName,$priceupdate);

    }
    else{
        $update->editwithoutimage($id,$nameupdate,$priceupdate);
    }
 
     
    
    header("Location:".url2('gestion/index') );
}
   }
}


?>