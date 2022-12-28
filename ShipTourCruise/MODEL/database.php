<?php
class database{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'shipcruise';
    private $connection;
    protected $db;
 
    public function connection(){
    
       
            $connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if($connection)
            {
                    
               return $connection;
               
            }else
            {
                echo "EROOR";
            }          
        }    
 
        
    }
   
?>