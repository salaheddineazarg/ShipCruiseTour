<nav class="navbar nav navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="logodesign">
      <img class="logoheader" src="<?php url('Public/IMAGE2/logo.png') ?>" alt="">
    </div>
    <button onclick=" navbar();" id="toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php url('home/index') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href="<?php url('booking/index') ?>">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href=" <?php url('about/index') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href=" <?php url('contact/index') ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href=" <?php url('login/index') ?>">Login</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>