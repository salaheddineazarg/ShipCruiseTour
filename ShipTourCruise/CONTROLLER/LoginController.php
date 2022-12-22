
<?php

class LoginController extends DatabaseController {
   public function index() 
  
   {  
    $data['title']="login page";
    View::load('login',$data);
       
   }}
  //     
  //  
   // -----------------------------------------
  //  public function admin()
  //  {
     
  //   if(isset($_POST['submitlogin']))
  //   {
  //     $emaillogin=$_POST['emaillogin'];
  //     $passwordlogin=$_POST['passwordlogin'];
  //     $admin=new admin;
  //     $auth=$admin-> check_login($emaillogin,$passwordlogin);
  //  if(mysqli_num_rows($auth)>0) { 
     
          
  //       $url=url2('gestion/index');
  //     header("Location:".$url); 
      

     
  //   }else{ 
          
  //       header("Location:index"); 
  //       $_SESSION['login']=false;
         
  //      }
  //  }
  //  }
   
  // }
  ?>