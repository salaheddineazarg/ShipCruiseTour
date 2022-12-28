<?php require(view.'include/header.php') ?>
<body>
<?php require(view.'include/navbar.php') ?>


<div class="cover">
  <img class="img-cover" src="https://images.pexels.com/photos/2388915/pexels-photo-2388915.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
  
  <div  class="offer text-center">
    <h1>CONTACT US</h1>
  <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quis iusto doloremque ducimus molestias quos voluptate, corrupti sit quasi quod voluptates itaque enim non. Expedita nemo dicta id corporis consequatur!</p>
 </div>
</div>

<div class="d-flex cards p-5 flex-row-reverse flex-wrap gap-5 w-100">

    <div>
        <div class="map" style="width: 600px"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>
    </div>

   
    <form class="form-contact ">
  <div class="mb-5 mt-xl-5 text-center mt-sm-0">
  <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input type="email" placeholder=" Email address" class="form-control" id="exampleInputEmail1" aria- 
      describedby="emailHelp">
  </div>
  <div class="mb-3 text-center ">
  <label for="exampleInputEmail1" class="form-label text-light">Message</label>
  <textarea class="form-control" placeholder="Message"  aria-label="With textarea"></textarea>
  </div>
  <a class="btn text-light bg-primary" href="">Submit</a>
</form>

 </div>

<?php require(view.'include/footer.php') ?>