
<?php
session_start();
class admin extends DatabaseController
{
   private $conn ;
   private $selectadmin;
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

      } 
    public function check_login($email,$password) {
      
      $this->conn = $this->connection();
       $this->selectadmin= mysqli_query($this->conn,"SELECT * FROM `admin` WHERE  email = '$email' && password = '$password' ");
       
       if($this->selectadmin){
      
        return $this->selectadmin;
       
     }
       
       

   
  }
}
?>