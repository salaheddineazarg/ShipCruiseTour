
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
      $this->select = mysqli_query($this->conn, 'SELECT * FROM cruise');

      if ($this->select) {
         return $this->select;
      }
   }
   public function getAllPorts()
   {
      $this->conn = $this->connection();
      $this->select = mysqli_query($this->conn, 'SELECT * FROM port');

      if ($this->select) {
         return $this->select;
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
         return $this->select;
      }
   }


   // -----------------------------------------------------------------------------------------------------------

   public function insertcruise($name,$desc, $price, $image, $nights, $port_depart, $date,$datefinal, array $trajet)
   {
      $this->conn = $this->connection();
      $this->add = mysqli_query($this->conn, "INSERT INTO `cruise` (name,description,price,image,number_nights,port_departeure,date_departure,date_arrival) 
                          VALUES('$name','$desc',$price,'$image',$nights,'$port_depart','$date','$datefinale')");

        



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
   public function deleteproduct($id)
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
        $s="UPDATE cruise SET name ='$name',price=$price , number_nights=$nights , port_departeure ='$port_depart',date_departure = $date WHERE id_c=$id ";
        var_dump($s);
        die();
     
      $this->update = mysqli_query($this->conn,);

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
}




?>