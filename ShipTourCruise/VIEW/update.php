<?php require(view.'include/header.php') ?>
<body>
<nav class="navbar nav  navbar-expand-lg navbar-dark">
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



<div class="cover-update container-fluid">

<form class="d-flex flex-column gap-3 form-update"   enctype="multipart/form-data" method="POST"  action="<?php url('gestion/updateproducts/'.$getrow['id_c'])?>" >
    

    <input  value="<?php echo$getrow['name']?>"   name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
    <input  value="<?php echo $getrow['price']?>" name="price" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    <input  value="<?php echo $getrow['date_departure']?>" name="date" type="datetime-local" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2"required >
    <div class="d-flex  gap-2 h-25">
    <div class=" w-50" >
        <img  class="card-img-top h-100 " src="<?php url('Public/IMAGE2/'.$getrow['image'])?>" alt="">
    </div>
    <input  accept=".jpg,jpeg,.png" name="image" type="file" class="form-control h-25" >
    </div>
    <input value= "<?php echo $getrow['number_nights']?>"  name="nights" type="number" class="form-control" placeholder="n°nights"  aria-describedby="basic-addon1" required>
       
    <select  name="port_depart" class="form-select" aria-label="Default select example" required>
      <option selected><?php echo$getrow['port_departeure']?></option>
      <?php foreach($ports as $row ){?>
  
    <option ><?php echo $row['Country']?></option>
     <?php }?>
  </select>
  
  <div class="row">
  <?php foreach($ports as $row ){?>
    <div>
      <input type="checkbox" value="<?php echo $row['id_p']?>" name="checkport[]" class="form-check-input "  >
      <label class="form-check-label" for="exampleCheck1"><?php echo $row['Country']?></label> 
    </div>
    <?php }?>
  
  
   
  </div>
  <div class="modal-footer">
       
         
      <button   id="btnSubAdd"  class="btn bg-primary text-light" name="submit" type="submit" >Submit</button>
  
        </div>
  </form>

</div>


<!-- JavaScript Bundle with Popper -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>