<?php require(view . 'include/header.php');

?>

<body class="myreserve">
  <nav class="navbar  navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <div class="logodesign">
        <img class="logoheader" src="<?php url('Public/IMAGE2/logo.png') ?>" alt="">
      </div>
      <button onclick=" navbar();" id="toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php url('home/index') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " href="<?php url('booking/index') ?>">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " href=" <?php url('about/index') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " href=" <?php url('contact/index') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'client') { ?>

              <a class="nav-link text-light "
                href="<?php url('myReservation/index/' . $_SESSION['user']) ?>">Myreservation</a>

            <?php } else { ?>



            <?php } ?>

          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'client') { ?>

              <a class="nav-link text-light " href=" <?php url('login/logout') ?>">Logout</a>

            <?php } else { ?>

              <a class="nav-link text-light " href=" <?php url('login/index') ?>">Login</a>

            <?php } ?>

          </li>

        </ul>

      </div>
    </div>
  </nav>



  <h1 class="text-center mb-4 mt-4">WELCOM TO MY RESERVATION</h1>



  <table class="table container dashbord-table table-dark">
    <thead>
      <tr>

        <th scope="col">Cruise</th>
        <th scope="col">Image</th>
        <th scope="col">Date of depart</th>
        <th scope="col">Type Room</th>
        <th scope="col">Price</th>

        <th scope="col">Date of Reservation</th>
        <th>&nbsp;</th>


      </tr>
    </thead>
    <tbody>


      <?php foreach ($myreserve as $row): ?>

        <tr>

          <th scope="row">
            <?= $row['name'] ?>
          </th>
          <td>
            <div class="img">
              <img class="image-table" src="<?php url('Public/IMAGE2/' . $row['image']) ?>" alt="">
            </div>
          </td>
          <td>
            <?= $row['date_departure'] ?>
          </td>

          <td>
            <?= $row['type']?>
          </td>
          <td>
            <?= $row['priceReserve'] ?>
          </td>
          <td>
            <?= $row['date'] ?>
          </td>
          <td>
            <a href="<?php url('myReservation/RemoveToken/'.$row['id_re'])?>" class="fa-solid fa-trash"></a>
          </td>



        </tr>
      <?php endforeach ?>

    </tbody>
  </table>




  <?php if($_SESSION['request'] == 'cant' ) { ?>

<script>
   

alert("Can't Cancel this reservation")
</script>
<?php
$_SESSION['request']== 'can';

 }?>
