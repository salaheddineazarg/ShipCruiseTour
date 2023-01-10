<?php
class user extends database
{
  protected $conn;

  public function __Construct()
  {

    $this->conn = $this->connection();
  }

  public function login($username, $password)
  {
    $this->conn = $this->connection();

    $username1 = htmlspecialchars(trim(strtolower($username)));
    $password1 = htmlspecialchars(trim(strtolower(sha1($password))));
    // Check if the user is an administrator

    $result = mysqli_query($this->conn, "SELECT * FROM user WHERE username='$username1' AND password='$password1'  AND role='admin' ");
    
    if (mysqli_num_rows($result) ==1 ) {

      return 'admin';
    } else {
      // If the user is not an administrator, check if they are a client
      $result = mysqli_query($this->conn, "SELECT * FROM user WHERE username='$username1' AND password='$password1' AND role='client'  ");
      if (mysqli_num_rows($result)> 0) {

        return 'client';
      } else {
         return false;
      }
    }
  }
}

?>