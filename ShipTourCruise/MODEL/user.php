<?php
session_start();
class user extends database
{
  private $conn;
  private $register;
  
  public function __Construct()
  {

    $this->conn = $this->connection();
  }

  public function login($username, $password)
  {
    $this->conn = $this->connection();

    $username = htmlspecialchars(trim(strtolower($username)));
    $password = htmlspecialchars(trim(strtolower(sha1($password))));
    // Check if the user is an administrator

    $result = mysqli_query($this->conn, "SELECT * FROM user WHERE username='$username' AND password='$password'  AND role='admin' ");
    
    if (mysqli_num_rows($result) ==1 ) {

      return 'admin';
    } else {
      // If the user is not an administrator, check if they are a client
      $result = mysqli_query($this->conn, "SELECT * FROM user WHERE username='$username' AND password='$password' AND role='client'  ");
      if (mysqli_num_rows($result)> 0) {
        
       $rowId = mysqli_fetch_assoc($result);

      $_SESSION['user']=(intval($rowId['id'])) ;
    
        return 'client';
      } else {
         return false;
      }
    }
  }

  public function register($first_name,$last_name,$username,$password){

    $this->conn = $this->connection();
    $username1 = htmlspecialchars(trim(strtolower($username)));
    $first_name = htmlspecialchars(trim(strtolower($first_name)));
    $last_name = htmlspecialchars(trim(strtolower($last_name)));
    $password1 = htmlspecialchars(trim(strtolower(sha1($password))));

    $this->register = mysqli_query($this->conn, "INSERT INTO user VALUES('NULL','$first_name','$last_name','$username1','$password1','client')  ");

    if($this->register){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;

      return $this->register;
    }else{
     
      return false;
    }
    


  }






}

?>