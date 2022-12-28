<?php
// class user extends database {
//   protected $db;

//   public function __Construct()
//    {

//       $this->db = $this->connection();
//    }

//   public function login( $username, $password) {
//     $username = $this->db->real_escape_string( $username);
//     $password = $this->db->real_escape_string(sha1($password));

//     // Check if the user is an administrator
//     $query = "SELECT * FROM user WHERE username=' $username' AND role='admin' AND password='$password'";
//     $result = $this->db->query($query);
//     if ($result->mysqli_num_rows == 1) {
//       // If the user is an administrator, return 'admin'
//       return 'admin';
//     } else {
//       // If the user is not an administrator, check if they are a client
//       $query = "SELECT * FROM user WHERE username=' $username' AND role='client' AND password='$password'";
//       $result = $this->db->query($query);
//       if ($result->num_rows == 1) {
//         // If the user is a client, return 'client'
//         return 'client';
//       } else {
//         // If the user is neither an administrator nor a client, return false
//         return false;
//       }
//     }
//   }
// }

?>