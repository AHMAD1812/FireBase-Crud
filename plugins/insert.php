<?php include "../includes/header.php"; ?>

<div class="container">
  <h2>How To insert data in FireBase Database</h2>
  <form class="form-horizontal" action="insertProcess.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
      <div class="col-sm-10">          
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submitData" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>


<?php include "../includes/footer.php"; ?>