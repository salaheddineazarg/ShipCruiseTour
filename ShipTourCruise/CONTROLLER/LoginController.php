<?php
session_start();

// controller/AuthController.php
class LoginController extends database
{
  private $model;
  private $register;

  public function index()
  {
    View::load('login');
  }




  public function checklogin()
  {
    if (isset($_POST['login_btn'])) {

      $model = new user();

     
      $role = $model->login($_POST['username'], $_POST['password']);


      if ($role) {
        
        $_SESSION['username'] = $_POST['username'];

        $_SESSION['role'] = $role;

        if ($role == 'admin') {

          header('location:' . url2('gestion/index'));

        } else if ($role == 'client') {


          header("location:" . url2('home/index'));
        }
      } else {

        echo " <script>alert('Invalid username or password')</script> ";

        header("location:" . $_SERVER['HTTP_REFERER']);

      }
    }
  }

  public function register()
  {
    if (isset($_POST['submit'])) {

      $register = new user();

      if ($_POST['password'] == $_POST['confirme_password']) {

        $register->register($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['password']);


        header("location:" . $_SERVER['HTTP_REFERER']);

        } else {

        header("location:" . url2('login'));
      }
    }
  }


  public function logout()
  {
    unset($_SESSION['role']);
    session_destroy();

    header("location:" . url2('home'));
  

  }
}

?>