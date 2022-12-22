<?php require(view.'include/header.php') ?>
<?php require(view.'include/navbar.php') ?>

<body>
<div class="cover-login container-fluid">

<form class="form-login justify-content-center  ">
  <div class="mb-5 mt-xl-5 text-center mt-sm-0">
  <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input type="email" placeholder=" Email address" class="form-control" id="exampleInputEmail1" aria- 
      describedby="emailHelp">
  </div>
  <div class="mb-5 mt-xl-5  text-center mt-sm-0">
    <label for="exampleInputPassword1"   class="form-label text-light">Password</label>
    <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
  </div>
  <a class="btn text-light  bg-primary" href="">Submit</a>
</form>
</div>


<!-- JavaScript Bundle with Popper -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
