 

<div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Port </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="d-flex flex-column gap-3"  enctype="multipart/form-data" method="POST"  action="<?php url('dashbord/addship')?>" >
    

  <input   name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
  <input   name="rooms" type="number" class="form-control" placeholder="rooms number" aria-label="Username" aria-describedby="basic-addon1" required>
  <input   name="places" type="number" class="form-control" placeholder="places number" aria-label="Username" aria-describedby="basic-addon1" required>
     
 
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
    <button   id="btnSubAdd"  class="btn bg-primary text-light  " name="submit" type="submit" >Submit</button>

      </div>


</form>
      </div>
  
    </div>
  </div>
</div>