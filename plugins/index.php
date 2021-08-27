<?php 
include "../includes/header.php"; 
session_start();
?>
<div class="container">
  <h2>FireBase Data Insertion <a class="btn btn-primary float right" href="insert.php">Add More Data</a></h2>
  <?php 
  if(isset($_SESSION['status']) && $_SESSION['status'] != ""){
  ?>
    <div class="alert alert-info alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Alert</strong>
    <?php 
    echo $_SESSION['status'];
    unset($_SESSION['status']);
    }
    ?>
    </div>
    <div class="container">
    <table class="table">
    <thead>
        <tr>
            <th class="success">ID</th>
            <th class="success">Name</th>
            <th class="success">Email</th>
            <th class="success">Phone Number</th>
            <th class="info">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include "../includes/dbconfig.php";
        $ref="contact/";
        $fetchData=$database->getReference($ref)->getValue();
        $i=1;
        if($fetchData > 0) {
        foreach($fetchData as $key => $row){
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td>
                <a class="btn btn-primary" href="edit.php?token=<?php echo $key;?> ">Edit</a>
                <a class="btn btn-danger" href="deleteProcess.php?token=<?php echo $key;?>">Delete</a>
            </td>
        </tr>
        <?php 
        $i++;
         }
        }else{
            ?>
            <tr>
                <td>Data Not Avaliable</td>
            </tr>
        <?php }?>
    </tbody>
    </table>
    </div>
</div>

<?php include "../includes/footer.php"; ?>