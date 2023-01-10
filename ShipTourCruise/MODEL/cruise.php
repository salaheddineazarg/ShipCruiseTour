
<?php

class cruise extends database
{
   private $conn;
   private $select;
   private $add;
   private $delete;
   private $getrow;
   private $update;
   private $port;
   private $ajouteport;

   private $ajouteship;


   public function __Construct()
   {

      $this->conn = $this->connection();
   }

   // -----------------------------------------------------------------------------------
   public function getAllCruises()
   {
      $this->conn = $this->connection();
      $this->select = mysqli_query($this->conn, 'SELECT c.*,s.name as shipname FROM cruise c,ship s WHERE c.id_s=s.id_s') ;

      if ($this->select) {
         return $this->select;
      }
     

   }
// -------------------------------------------------------------------------------------------

   public function getAllPorts()
   {
      $this->conn = $this->connection();
      $this->select = mysqli_query($this->conn, 'SELECT * FROM port');

      if ($this->select) {
         $result=mysqli_fetch_all( $this->select,MYSQLI_ASSOC);
         return $result;
      }
   }
   public function getAllTrajet($id)
   {
      $this->conn = $this->connection();
      $this->select = mysqli_query($this->conn, 'SELECT * FROM `cruise` c ,trajet t,  port p WHERE c.id_c=t.id_c AND t.id_p=p.id_p AND c.id_c='.$id.' ');

      if ($this->select) {
         $result=mysqli_fetch_all( $this->select,MYSQLI_ASSOC);
         return $result;
      }
   }

   public function getAllShips()
   {
      $this->conn = $this->connection();
      $this->select = mysqli_query($this->conn, 'SELECT * FROM ship');

      if ($this->select) {
         return mysqli_fetch_all( $this->select,MYSQLI_ASSOC);
      }
   }

  
   // ------------------------------FILTRE----------------------------------------------------------
   public function  filtre($port,$date,$ship)
   {
      $this->conn = $this->connection();
         
   
      $this->select = mysqli_query($this->conn, "SELECT DISTINCT c.*,s.name as shipname,p.Country,t.id_p FROM cruise c,ship s ,port p,trajet t WHERE c.id_s=s.id_s AND p.id_p=t.id_p AND t.id_c=c.id_c AND c.port_departeure='$port' AND '$date ' < c.date_departure AND s.name='$ship';" );
   

      if ($this->select) {
        
         
         return mysqli_fetch_all( $this->select,MYSQLI_ASSOC);;
        
      }else {
         
       return false;
      }
   }

   // -----------------------------------------------------------------------------------------------------------

   public function insertcruise($name,$desc, $price, $image, $nights, $port_depart, $date,$datefinale,$id_s, array $trajet)
   {
      $this->conn = $this->connection();
      $this->add = mysqli_query($this->conn, "INSERT INTO `cruise` (name,description,price,image,number_nights,port_departeure,date_departure,date_arrival,id_s) 
                          VALUES('$name','$desc',$price,'$image',$nights,'$port_depart','$date','$datefinale',$id_s)");

        



      if ($this->add) {
   
         $last_id =  mysqli_query($this->conn, "SELECT max(id_c) FROM `cruise` ");
         $max_id = (int)mysqli_fetch_assoc($last_id)["max(id_c)"];


         for ($i=0;$i< count($trajet);$i++) {

            $this->addport($max_id,$trajet[$i]);
          
         }
           return $this->add;
      }
   }
   public function addport($id_c,$id_p)
   {
      $this->conn = $this->connection();
      $this->port =mysqli_query($this->conn,"INSERT INTO trajet (id_c,id_p) VALUE($id_c,$id_p)");
      if( $this->port){
     
         return  $this->port;
      }
   
   }


   // ------------------------------------------------------------------------------------------------------------------
   public function deletecruise($id)
   {


      $this->conn = $this->connection();


      $this->delete = mysqli_query($this->conn, "DELETE FROM `cruise` WHERE id_c=" . $id . "");

      if ($this->delete) {
         $url = url2('gestion/index');
         sleep(1);
         header("Location:$url");
      } else {
         echo "<script>alert('YOUR PRODUCT IS DOESNT DELETED')</script>";
      }
   }
   // -------------------------------------------------------------------------
   public function edit($id,$name, $price, $image, $nights, $port_depart, $date, array $trajet)
   {

      $this->conn = $this->connection();
  
      $this->update = mysqli_query($this->conn, "UPDATE `cruise` SET name ='$name', price=$price , image='$image' ,number_nights=$nights,port_departeure='$port_depart' ,date_departure='$date'  WHERE id_c=$id");

      if ($this->update) {
      

      $last_id =  mysqli_query($this->conn, "SELECT max(id_c) FROM `cruise` ");
      $max_id = (int)mysqli_fetch_assoc($last_id)["max(id_c)"];


      for ($i=0;$i< count($trajet);$i++) {

         $this->updateport($max_id,$trajet[$i]);
       
      }
      return $this->update;
   }
   }

public function updateport($id_c,$id_p)
{
   $this->conn = $this->connection();
   $this->port =mysqli_query($this->conn,"UPDATE trajet SET id_c=$id_c, id_p=$id_p");
   if( $this->port){
  
      return  $this->port;
   }

}



   //  ----------------------------------------------
   public function editwithoutimage($id,$name, $price, $nights, $port_depart, $date, array $trajet)
   {

      $this->conn = $this->connection();
        
      
     
      $this->update = mysqli_query($this->conn,"UPDATE cruise SET name ='$name',price=$price , number_nights=$nights , port_departeure ='$port_depart',date_departure = '$date' WHERE id_c=$id ");

      if ($this->update) {
        
   
      $last_id =  mysqli_query($this->conn, "SELECT max(id_c) FROM `cruise`");
      $max_id = (int)mysqli_fetch_assoc($last_id)["max(id_c)"];


      for ($i=0;$i< count($trajet);$i++) {

         $this->updateport2($max_id,$trajet[$i]);
       
      }
      return $this->update;
   }
   }

public function updateport2($id_c,$id_p)
{
   $this->conn = $this->connection();
   $this->port =mysqli_query($this->conn,"UPDATE trajet SET id_c=$id_c, id_p=$id_p");
   if( $this->port){
  
      return  $this->port;
   }
   }

   //  -------------------------------------------------------------------------------------------------
   public function getrow($id)
   {
      $this->conn = $this->connection();

      $this->getrow = mysqli_query($this->conn, "SELECT* FROM `cruise` WHERE id_c= $id");

      return mysqli_fetch_array($this->getrow);
   }
// --------------------------------------------------------------------------------------------------------
   public function ajouteport($country)
   {
      $this->conn = $this->connection();
      $this->$ajouteport=mysqli_query($this->conn,"INSERT INTO `port`(Country) VALUES ('$country')  ");
      if($this->$ajouteport){

         return $this->$ajouteport;
      }

   }
   // --------------------------------------------------------------------------------------------------------
   public function ajouteship($name,$rooms,$places)
   {
      $this->conn = $this->connection();

      $this->$ajouteship = mysqli_query($this->conn,"INSERT INTO `ship`(name,number_rooms,number_places) VALUES('$name',$rooms,$places)  ");

      if($this->$ajouteship){

         return $this->$ajouteship;
      }

   }
   public function deleteport($id)
   {


      $this->conn = $this->connection();


      $this->delete = mysqli_query($this->conn, "DELETE FROM `port` WHERE id_p=" . $id . "");

      if ($this->delete) {
         $url = url2('Dashbord/index');
       
         header("Location:$url");
      } else {
         echo "<script>alert('YOUR PORT IS DOESNT DELETED')</script>";
      }
   }

   public function deleteship($id)
   {


      $this->conn = $this->connection();


      $this->delete = mysqli_query($this->conn, "DELETE FROM `ship` WHERE id_s=" . $id . "");

      if ($this->delete) {
         $url = url2('Dashbord/index');
       
         header("Location:$url");
      } else {
         echo "<script>alert('YOUR SHIP IS DOESNT DELETED')</script>";
      }
   }
}




?>