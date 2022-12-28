<?php require(view.'include/header.php') ?>
<body>
    
<?php require(view.'include/navbar.php') ?>
<!-- end nav -->

<div id="carouselExampleIndicators" class="carousel carousel-fade slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block img-cover" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1430672/pexels-photo-1430672.jpeg" class="d-block img-cover" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block img-cover" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- CAROUSELS END -->
<!-- nav search -->


<div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-2">
                <h4>Sort Deals By:</h4>
              </div>
              <div class="col-lg-4">
                  <fieldset>
                      <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation" onchange="this.form.click()">
                          <option selected="">Destinations</option>
                          <option type="checkbox" name="option1" value="Italy">Italy</option>
                          <option value="France">France</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Australia">Australia</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Singapore">Singapore</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-4">
                  <fieldset>
                      <select name="Price" class="form-select" aria-label="Default select example" id="choosePrice" onchange="this.form.click()">
                          <option selected="">Price Range</option>
                          <option value="100">$100 - $250</option>
                          <option value="250">$250 - $500</option>
                          <option value="500">$500 - $1,000</option>
                          <option value="1000">$1,000 - $2,500</option>
                          <option value="2500+">$2,500+</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-2">                        
                  <fieldset>
                      <button class="border-button">Search Results</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<!-- nav search -->


  <div  class="row gap-5 w-100 mb-5 cards    justify-content-center ">
  <?php foreach($cruises as $row){ ?>


<div class="card text-center shadow-lg col-xl-3 col-sm-4 " style="width: 18rem;">
  <img class="card-img-top" src="<?php url('Public/IMAGE2/'.$row['image'])?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <div class="d-flex">
   <i class="fa-solid fa-location-dot"></i>
    <p><?php echo $row['port_departeure'] ?></p>
   </div>
    <h4><b><?php echo"PERSON/".$row['price']."$"?></b></h4>
    <a href="<?php url('reservation/index/'.$row['id_c'])?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div> 

<!-- --------------- -->
  <?php }?>


</div>
<!-- ---------------------- -->




<!-- FOOTER -->
<?php require(view.'include/footer.php') ?>