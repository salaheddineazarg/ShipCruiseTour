<?php
class  token extends database {
    private $conn;
    private $insert;


    public function __Construct()
    {
      
        $this->conn = $this->connection();
        
     
    }


    public function addreservation($id_custmor,$id_cruise,$id_room,$price) {
        $this->conn = $this->connection();
    
        $this->insert = mysqli_query($this->conn,"INSERT INTO `reservation` (`id_re`,`id_customer`,`id_cruise`,`id_room`,`date`,`price`) VALUES (NULL,'$id_custmor','$id_cruise','$id_room',NOW(),'$price')");

        if($this->insert){


            return $this->insert;
        }



    } 

    public function deletereserv($id){
        $this->conn = $this->connection();

       

        $this->insert = mysqli_query($this->conn,"SELECT c.date_departure FROM reservation r INNER JOIN cruise c on r.id_cruise=c.id_c WHERE r.id_re='$id' ");
       if($this->insert){

       $date_depart =  implode(mysqli_fetch_array($this->insert)) ;
       $date_depart= explode(' ',$date_depart);
        $date_depart=$date_depart[0];
    
        if($date_depart > date('Y-m-d',strtotime(date('Y-m-d').'+ 2 days'))) {

            $this->insert = mysqli_query($this->conn,"DELETE FROM reservation WHERE id_re='$id'");
            if ($this->insert) {
               
                return true;
            }else
            {
                return false;
            }



        }
       
       
        
       }

    } 
}

?>