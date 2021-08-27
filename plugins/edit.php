<?php include "../includes/header.php"; ?>

<div class="container">
  <h2>Edit or Update data in FireBase Database</h2>
  <?php 
  include "../includes/dbconfig.php";
  $token = $_GET['token'];
  $ref="contact/";
  $getData= $database->getReference($ref)->getChild($token)->getValue();
  ?>
  <form class="form-horizontal mt-4" action="editProcess.php" method="post">
      <input type="hidden" value="<?php echo $token;?>" name="token">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter name" value="<?php echo $getData['name'];?>" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="<?php echo $getData['email'];?>" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
      <div class="col-sm-10">          
      <input type="tel" class="form-control" id="phone" name="phone"   value="<?php echo $getData['phone'];?>" placeholder="Enter Phone Number" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="updateData" class="btn btn-primary">Update</button>
        <a class="btn btn-info" href="index.php">Cancel</a>
      </div>
    </div>
  </form>
</div>


<?php include "../includes/footer.php"; ?>