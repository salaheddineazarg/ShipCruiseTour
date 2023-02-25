
<nav id="nav" class="navbar nav navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="logodesign">
      <img class="logoheader" src="<?php url('Public/IMAGE2/logo.png') ?>" alt="">
    </div>
    <button  id="toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php url('home/index') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href="<?php url('booking/index/1') ?>">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href=" <?php url('about/index') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href=" <?php url('contact/index') ?>">Contact</a>
        </li>
        <li class="nav-item">
           <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'client'){?>

              <a class="nav-link text-light "  href="<?php url('myReservation/index/'.$_SESSION['user'])?>">Myreservation</a>
          
             <?php } else {?>

             

             <?php }?>
        
        </li>
        <li class="nav-item">
           <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'client'){?>

              <a class="nav-link text-light "  href=" <?php url('login/logout') ?>">Logout</a>
          
             <?php } else {?>

              <a class="nav-link text-light "  href=" <?php url('login/index') ?>">Login</a>

             <?php }?>
        
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<style>

.sideblack{

background-color: #000000;
color: #fff;
}
</style>

<script >
  var togle = document.getElementById("toggle");
var nav = document.getElementById("nav");

togle.addEventListener("click", () => {
  
  nav.classList.toggle("sideblack");
});

</script>
