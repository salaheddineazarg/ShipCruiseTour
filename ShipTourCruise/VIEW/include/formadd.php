<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              
      <form class="d-flex flex-column gap-3"  enctype="multipart/form-data" method="POST"  action="<?php url('gestion/add')?>" >
    

      <input name="name" type="text" class="form-control" placeholder="name" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                    <input name="price" type="text" class="form-control" placeholder="price"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <input name="desc" type="text" class="form-control" placeholder="description"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <h6>FROM</h6>
                    <input name="date" type="datetime-local" class="form-control" aria-label="Recipient's username"
                        aria-describedby="basic-addon2" required>
                    <h6>TO</h6>
                    <input name="datefinal" type="datetime-local" class="form-control" aria-label="Recipient's username"
                        aria-describedby="basic-addon2" required>
                    <input accept=".jpg,jpeg,.png" name="imageadd" type="file" class="form-control" required>
                    <input name="nights" type="number" class="form-control" placeholder="n°nights"
                        aria-describedby="basic-addon1" required>
                    <select name="ship" class="form-select" aria-label="Default select example" required>
                        <option selected>Ship</option>
                        <?php foreach($ships as $row ){?>

                        <option value="<?php echo $row['id_s']?>"><?php echo $row['name']?></option>
                        <?php }?>
                    </select>

                    <select name="port_depart" class="form-select" aria-label="Default select example" required>
                        <option selected>Port depart</option>
                        <?php foreach($ports as $row ){?>

                        <option><?php echo $row['Country']?></option>
                        <?php }?>
                    </select>

                    <div class="row">
                        <?php foreach($ports as $row ){?>
                        <div>
                            <input type="checkbox" value="<?php echo $row['id_p']?>" name="checkport[]"  class="form-check-input ">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $row['Country']?></label>
                        </div>
                        <?php }?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <button href="<?php url('gestion/add')?>" id="btnSubAdd" class="btn bg-primary text-light  " name="submitadd" type="submit">Submit</button>
                    </div>
  
  
  </form>
            </div>
        </div>
    </div>
</div>