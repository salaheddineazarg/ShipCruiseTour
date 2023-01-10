
<?php
session_start();
// controller/AuthController.php
class LoginController extends database {
  private $model;  

  public function index() 

  { 
     
     View::load('login');
 }
  public function __Construct(){
    $model=new user();
  }


  public function checklogin() {
    if (isset($_POST['login_btn'])) {

      $model=new user();
     
      // Attempt to log the user in
        $role = $model->login($_POST['username'], $_POST['password']);
       
        
      if ($role) {
        // If the login was successful, set the session variables and redirect to the appropriate page
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['role'] = $role;

        if ( $role == 'admin') {
          
          header('location:'.url2('gestion/index'));
        }  else{
          header('location:'.url2('home/index'));
        }
      } else {
        
        echo" <script>alert('Invalid username or password')</script> ";
        header('location:'.url2('login/index'));
      }
    }
  }
 }

  ?>