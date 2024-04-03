<?php
include 'partials\_database.php';
echo '<div class="modal" id="myModal-admin" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Admin-Login</h5>
      </div>
      <div class="modal-body">
      <form action="partials\adminform.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
?>