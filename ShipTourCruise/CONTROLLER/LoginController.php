
<?php
// controller/AuthController.php
class LoginController extends database {
  private $model;  

  public function index() 

  { 
     
     View::load('login');
 }

//   public function __construct() {
//     $this->model = new user();
//   }

//   public function checklogin() {
//     if (isset($_POST['login_btn'])) {
//       // Attempt to log the user in
//        $this->model->login($_POST['username'], $_POST['password']);
//       if ($this->model) {
//         // If the login was successful, set the session variables and redirect to the appropriate page
//         $_SESSION['username'] = $_POST['username'];
//         $_SESSION['role'] =  $this->model;
//         $_SESSION['success'] = "You are now logged in";
//         if ( $this->model == 'admin') {
         
          
//           header('location:'.url2('gestion/index'));
//         } else {
//           header('location:'.url2('home/index'));
//         }
//       } else {
        
//         echo" <script>alert('Invalid username or password')</script> ";
//        sleep(1);
//         header('location:'.url2('login/index'));
//       }
//     }
//   }
 }

  ?>