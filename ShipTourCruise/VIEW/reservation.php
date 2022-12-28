<?php require(view.'include/header.php') ?>
<body>
<?php require(view.'include/navbar.php') ?>

<section class="cover">
  <img class="img-cover" src="https://images.pexels.com/photos/2678418/pexels-photo-2678418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
   
 
<div class="card text-center  enjoy shadow  " style="max-width: 770px;">
  <div class="row h-100 ">
    <div class="col-md-4">
      <img src="<?php url('Public/IMAGE2/'.$getrow['image'])?>" class="img-fluid h-100 rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body ">
        <h2 class="card-title"> <?php echo $getrow ['name']?></h2>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
        <div class="d-flex ms-xl-5 ms-sm-0">

        <div class="d-flex  text-center  flex-column">
        <h5 class="card-title">DAYS</h5>
        <div class="d-flex flex-column">
        <?php $max =count($trajets);

      for ($i = 1; $i <= $max; $i++) {?>
    

          <h6> <?php echo $i . "\n" ?></h6>
        <?php } ?>
     
        
      </div>
</div> 


<div class="d-flex  text-center  flex-column">
        <h5 class="card-title">PORTS</h5>
        <div class="d-flex flex-column">
      
          <?php foreach($trajets as $row) {?>
          <h6><?php echo $row['Country']?></h6>
          <?php } ?>
      </div>
</div> 
</div>

<H3><?php echo 'PERSON/'.$getrow['price']."$".''?>
       </H3> 
</div> 
       
      </div>
    </div>
    <a class="btn btn-reserv btn-lg bg-primary text-light " href="#reserv">RESEVE NOW</a>
  </div>
  


</section>


<section id="reserv" class=" text-center items-reserv mb-4 mt-5">

 <h1 class="text-light" >RESERVE FORM</h1>
 <canvas class="w-25 bg-primary " style="height:10px;"></canvas>

 <form class="row g-2  form-reserv needs-validation" >
  <div class=" col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label"> Full name</label>
    <input type="text" class="form-control" id="validationTooltip01"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
 <div class=" col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="validationTooltip02"  aria-describedby="emailHelp"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class=" col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Cruise</label>
    <input type="email" class="form-control" id="validationTooltip02"    required>
    <div class="valid-tooltip">
    Please choose a unique and valid cruise.
    </div>
  </div>
  <div class=" col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">SHIP</label>
    <div class="input-group has-validation">
      
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid user SHIP.
      </div>
    </div>
  </div>
  <div class=" mb-3 col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">ROOMS</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">SOLO</option>
      <option> DOUBLE</option>
      <option>FAMILTY</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid ROME.
    </div>
  </div>
  <div class=" col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Price</label>
    <input type="text" class="form-control" id="validationTooltip01"  required>
    
    <div class="invalid-tooltip">
      Please select a valid Price.
    </div>
  
</div>
  <div class=" d-flex mb-4 date col-md-4  gap-2 position-relative">
    <div class=" d-flex flex-column">
    <label for="validationTooltip05" class="form-label">DATE OF DEPART</label>
    <input type="date" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid Date.
    </div>
  </div>
    <div>TO</div>
      <div class="  d-flex flex-column">
    <label for="validationTooltip05" class="form-label">DATE</label>
    <input type="date" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid Date.
    </div>
  </div>

  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

 
</section>

<?php require(view.'include/footer.php') ?>