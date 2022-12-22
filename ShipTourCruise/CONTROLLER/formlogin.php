
   <?php
     
   
      session_start();
     
      $admin= new admin;
     

    
    
      if(isset($_POST['submitlogin'])){
        $emaillogin = $user->escape_string($_POST['emaillogin']);
        $passwordlogin = $user->escape_string($_POST['passwordlogin']);
       
        $auth = $admin->check_login($emaillogin, $passwordlogin);
       
        if($auth){
        
          header('location:gestion.php');
        }
        else{
          $_SESSION['message'] = 'Invalid username or password';
          header('location:index.php');
        }
      }
      else{
        $_SESSION['message'] = 'You need to login first';
        header('location:index.php');}
    
  


 








?>