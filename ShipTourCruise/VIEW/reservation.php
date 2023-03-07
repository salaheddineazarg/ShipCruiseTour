<?php require(view . 'include/header.php') ?>

<body>
  <?php require(view . 'include/navbar.php') ;

  if (isset($_SESSION['message']) && $_SESSION['message'] == true ) : ?>

  <script>
 alert("This Cruise is Full You Can't Book it")
  </script>

    
   
 <?php endif ;
 unset($_SESSION['message']);
  ?>



  <section class="cover">
    <img class="img-cover"
      src="https://images.pexels.com/photos/2678418/pexels-photo-2678418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
      alt="">


    <div class="card text-center  enjoy shadow  " style="max-width: 770px;">
      <div class="row h-100 ">
        <div class="col-md-4">
          <img src="<?php url('Public/IMAGE2/' . $getrow['image']) ?>" class="img-fluid h-100 rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body ">
            <h2 class="card-title">
              <?php echo $getrow['name'] ?>
            </h2>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>

            <div class="d-flex ms-xl-5 ms-sm-0">

              <div class="d-flex  text-center  flex-column">
                <h5 class="card-title">DAYS</h5>
                <div class="d-flex flex-column">
                  <?php $max = count($trajets);

                  for ($i = 1; $i <= $max; $i++) { ?>


                    <h6>
                      <?php echo $i . "\n" ?>
                    </h6>
                  <?php } ?>


                </div>
              </div>


              <div class="d-flex  text-center  flex-column">
                <h5 class="card-title">PORTS</h5>
                <div class="d-flex flex-column">

                  <?php foreach ($trajets as $row) { ?>
                    <h6>
                      <?php echo $row['Country'] ?>
                    </h6>
                  <?php } ?>
                </div>
              </div>
            </div>

            <H3>
              <?php echo 'PERSON/' . $getrow['price'] . "$" . '' ?>
            </H3>
          </div>

        </div>
      </div>
      <a class="btn btn-reserv btn-lg bg-primary text-light " href="#reserv">RESEVE NOW</a>
    </div>



  </section>


  <section id="reserv" class=" text-center items-reserv mb-4 mt-5">

    <h1 class="text-light">RESERVE FORM</h1>
    <canvas class="w-25 bg-primary " style="height:10px;"></canvas>

    <form class="row g-2  form-reserv needs-validation" method="POST" action="<?php url('reservation/token') ?>">
      <div class=" col-md-4 position-relative">
        <label for="validationTooltip01" class="form-label"> Full name</label>
        <input type="text" name="name" class="form-control" id="validationTooltip01" required>

      </div>
      <div class=" col-md-4 position-relative">
        <label for="validationTooltip02" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" id="validationTooltip02" aria-describedby="emailHelp"
          required>

      </div>
      <div class=" col-md-4 position-relative">
        <label for="validationTooltip02" class="form-label">Cruise</label>
        <input type="text" value="<?php echo $getrow['name'] ?>" name="cruise" class="form-control"
          id="validationTooltip02" disabled required>

      </div>
      <div class=" col-md-4 position-relative">
        <label for="validationTooltipUsername" class="form-label">SHIP</label>
        <div class="input-group has-validation">

          <input type="text" class="form-control" name="ship" value="<?php echo $getrow['shipname'] ?>"
            id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" disabled required>

        </div>
      </div>
      <div class=" mb-3 col-md-4 position-relative">
        <label for="validationTooltip04" class="form-label">ROOMS</label>
        <select class="form-select" name="chambre" id="chambre" required>
          <?php foreach ($reservation as $row): ?>

            <option selected value="<?= $row['id'] ?>" data-val="<?php echo $row['price'] ?>"><?php echo $row['type'] ?>
            </option>
          <?php endforeach ?>
        </select>

      </div>
      <div class=" col-md-4 position-relative">
        <label for="validationTooltip04" class="form-label">Price</label>
        <input type="text" value="" name="priceTotal" class="form-control" id="price" required>



      </div>
      <div class=" d-flex mb-4 date col-md-12  gap-2 position-relative">
        <div class=" d-flex flex-column">
          <label for="validationTooltip05" class="form-label">DATE OF DEPART</label>
          <input type="text" name="date_depart" value="<?php echo $getrow['date_departure'] ?>" class="form-control"
            id="validationTooltip05" disabled required>

        </div>
        <div>TO</div>
        <div class="  d-flex flex-column">
          <label for="validationTooltip05" class="form-label">DATE OF ARRIVAL</label>
          <input type="text" name="date_arrival" value="<?php echo $getrow['date_arrival'] ?>" class="form-control"
            id="validationTooltip05" disabled required>

        </div>

      </div>
      <input type="hidden" value="<?php echo $getrow['price'] ?>" class="form-control" id="priceCruise" required>
      <input type="hidden" value="<?php echo $getrow['id_c'] ?>" name="id_cruise" id="">
      <div class="col-12">
        <button class="btn btn-primary" name="sumbitreserv" type="submit">Submit form</button>


      </div>
      <a href="<?php url('login') ?>" class="text-danger fw-bold"><?php echo $login ?></a>
    </form>


  </section>


  <?php require(view . 'include/footer.php') ?>

  <script>

    let chambre = document.getElementById('chambre');
    let price = document.getElementById('price');
    let priceCruise = parseInt(document.getElementById("priceCruise").value);
    window.addEventListener("load", () => {
      price.value = priceCruise + "$";
      console.log("sssssssssssss");


      chambre.addEventListener("change", () => {
        let chambreValue = parseInt(chambre.options[chambre.selectedIndex].dataset.val);



        price.value = priceCruise + chambreValue + "$";
        console.log(price.value);


      })

    })
  </script>

 