<?php require(view.'include/header.php') ?>

<body class="bg-dark">
  

    
<nav class="navbar  navbar-expand-lg navbar-dark">
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
          <a class="nav-link text-light "  href="<?php url('Dashbord/index') ?>">Dashbord</a>
        </li>
        <li class="nav-item">
        <a type="button" class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Cruise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light "  href="<?php url('gestion/logout') ?>">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!-- end nav -->







<div  class="row gap-5 w-100 mb-5     justify-content-center ">
  <?php foreach($cruises as $row){ ?>


    <div class="card text-center shadow-lg col-xl-3 col-sm-4 " style="width: 18rem;">
  <img class="card-img-top" src="<?php url('Public/IMAGE2/'.$row['image'])?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']?></h5>
    <p class="card-text"><?php echo $row['description']?></p> 
  
    <h4><b><?php echo"PERSON/".$row['price']."$"?></b></h4>
  
    <div clas="d-flex">
    <a href="<?php url('gestion/update/'.$row['id_c'])?>" class="btn btn-primary"  >UPDATE</a>
    <a href="<?php url('gestion/delete/'.$row['id_c'])?>" class="btn btn-primary">DELETE</a>
  </div>
  </div>
</div> 
<!-- --------------- -->
  <?php }?>

  <?php require(view.'include/formadd.php') ?>
</div>
<!-- --------------- -->









</body>
</html>


