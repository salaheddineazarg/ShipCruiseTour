<?php require(view.'include/header.php') ?>

<body>
<?php require(view.'include/navbar.php') ?>
<div class="cover-login container-fluid">




<form class="form-login justify-content-center  " METHOD="POST" action="<?php url('login/checklogin')?>">
<i class="fa-solid fa-user text-light "  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> sign up</i>
  <div class="mb-3 mt-xl-5 text-center mt-sm-0">
  <label for="exampleInputEmail1" class="form-label text-light">Username</label>
    <input type="text" name="username" placeholder="Username " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-5  text-center mt-sm-0">
    <label for="exampleInputPassword1"    class="form-label text-light">Password</label>
    <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
  </div>
  <button class="btn text-light bg-primary"  type="submit" name="login_btn">Submit</button>
</form>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Account</h1>
       

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="signup-form">
    <form id="form" action="<?php url('login/register') ?>" method="POST">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-sm-6 mb-xs-3">
          <input type="text" class="form-control" name="first_name" placeholder="First Name" ></div>
				<div class="col-sm-6">
          <input type="text" class="form-control name"  name="last_name" placeholder="Last Name" ></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control name" name="username" placeholder="Username" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control name" name="password" placeholder="Password">
        </div>
		<div class="form-group">
            <input type="password" class="form-control name" name="confirme_password" placeholder="Confirm Password" >
        </div>        
           <p id="message"></p>
		<div class="form-group">
            <button type="submit"  name="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
         <div class="modal-footer">
   <div class="hint-text">Already have an account? <a href="#">Login here</a></div>
      </div>
    </form>
	
</div>
      </div>
     
    </div>
  </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="<?php url('Public/js/validation.js')?>"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
