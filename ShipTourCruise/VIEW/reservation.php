<?php require(view.'include/header.php') ?>
<body>
<?php require(view.'include/navbar.php') ?>

<div class="cover">
  <img class="img-cover" src="https://images.pexels.com/photos/2678418/pexels-photo-2678418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
  <div  class="enjoy text-center">
    <h1>TAKE EVERY CHANCE IN LIFE
    </h1>
    <h5 >BECAUSE SOME THINKS ONLY HAPPEN ONCE </h5>
 </div>
</div>

<section class="items-reserv mt-5 container-fluid w-100" >



 <form class="row g-2 form-reserv needs-validation" novalidate>
  <div class=" position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationTooltip01"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class=" position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationTooltip02"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class=" position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class=" position-relative">
    <label for="validationTooltip04" class="form-label">THE PATH</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">FRANCE-MONACO</option>
      <option> DOUBLE</option>
      <option>FAMILTY</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid ROME.
    </div>
  <div class=" position-relative">
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
  <div class=" position-relative">
    <label for="validationTooltip05" class="form-label">DATE</label>
    <input type="date" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid Date.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

 
</section>