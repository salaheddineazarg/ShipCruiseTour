<?php require(view.'include/header.php') ?>
<body>

<nav class="navbar nav2  navbar-expand-lg navbar-dark">
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
          <a class="nav-link text-light "  href="<?php url('gestion/index') ?>">Gestion</a>
        </li>
       
      
      </ul>
      
    </div>
  </div>
</nav>
       
<h1 class="text-center mb-4 mt-4">WELCOM TO DASHBORD</h1>



<table class="table container dashbord-table table-dark">
  <thead>
    <tr>
      <th scope="col">Port  <a  data-bs-toggle="modal" data-bs-target="#exampleModalp" data-bs-whatever="@fat"  class="fa-solid fa-plus"></a></th>
      <th scope="col">Country</th>
      <th scope="col">Gestion</th>
      
     
    </tr>
  </thead>
  <tbody>
  <?php $max =count($ports);

for ($i = 1; $i <= $max; $i++) {?>


    
  <?php } ?>
   <?php foreach ($ports as $row) {?>
    <tr>
 
      <th scope="row"> <?php echo $i ?></th>
      <td><?php echo $row['Country']?></td>
      <td>
        <a href="<?php url('dashbord/deleteport/'.$row['id_p'])?>" class="fa-solid fa-trash"></a>
     
    </td>
    </tr>
<?php }?>
  
  </tbody>
</table>
<h1 class="text-center mb-4 mt-4">SHIPS</h1>

<table class="table container dashbord-table table-dark">
  <thead>
    <tr>
      <th scope="col">Ship<a  data-bs-toggle="modal" data-bs-target="#exampleModals" data-bs-whatever="@fat"   class="fa-solid fa-plus"></a></th>
      <th scope="col">Name</th>
      <th scope="col">N°Rooms</th>
      <th scope="col">N°Places</th>
      <th scope="col">Gestion</th>
      
     
    </tr>
  </thead>
  <tbody>
  <?php

for ($i = 1; $i <=count($ships); $i++) {?>


    
  <?php } ?>
   <?php foreach ($ships as $ship) {?>
    <tr>
 
      <th scope="row"> <?php echo $i ?></th>
      <td><?php echo $ship['name']?></td>
      <td><?php echo $ship['number_rooms']?></td>
      <td><?php echo $ship['number_places']?></td>
      <td>
        <a href="<?php url('dashbord/deleteship/'.$ship['id_s'])?>" class="fa-solid fa-trash"></a>
     
    </td>
    </tr>
<?php }?>
  
  </tbody>
</table>



<?php require(view.'include/formport.php') ?>
<?php require(view.'include/formship.php') ?>
<!-- JavaScript Bundle with Popper -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>