<?php 


class product extends DatabaseController
{
   private $conn ;
   private $select;
   private $add;
   private $delete;
   private $getrow;
   protected $update; 
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

   }

   // -----------------------------------------------------------------------------------
   public function getAllProducts()
   {
      $this->conn = $this->connection();
   $this->select= mysqli_query($this->conn,'SELECT * FROM product ' );

    if($this->select){
    return $this->select;
}
  
   }


// -----------------------------------------------------------------------------------------------------------

   public function insertproduct($name,$image,$price)
   {
      $this->conn = $this->connection();
   $this->add= mysqli_query($this->conn,"INSERT INTO `product`(`id`, `name`, `image`, `prix`) VALUES ('NULL','$name','$image','$price') " );

      if($this->add){
      return $this->add;
}
  
   }
   // ------------------------------------------------------------------------------------------------------------------
   public function deleteproduct($id)
   {
     
    
$this->conn = $this->connection();


$this->delete=mysqli_query($this->conn,"DELETE FROM `product` WHERE id=".$id."");

if($this->delete){
   $url=url2('gestion/index');
   sleep(1);
 header("Location:$url");

}else{
   echo"<script>alert('YOUR PRODUCT IS DOESNT DELETED')</script>";
}


   }
   // -------------------------------------------------------------------------
    public function edit($id,$name,$image,$price){

      $this->conn = $this->connection();

         $this->update=mysqli_query($this->conn," UPDATE product SET name ='$name', prix=$price , image='$image' WHERE id=$id ");

     if($this->update){
      return $this->update;
}

    }
   //  ----------------------------------------------
    public function editwithoutimage($id,$name,$price){

      $this->conn = $this->connection();

      
      
     
       
       $this->$update = mysqli_query($this->conn," UPDATE product  SET name ='$name', prix =$price WHERE id=$id ");
   
    
    
     if($this->$update){
      return $this->$update;
}

    }
   //  -------------------------------------------------------------------------------------------------
    public function getrow($id)
    {
      $this->conn = $this->connection();
        
      $this->getrow=mysqli_query($this->conn,"SELECT* FROM `product` WHERE id= $id");
     
         return mysqli_fetch_array($this->getrow);
        

     
   
    }
   

}




?>