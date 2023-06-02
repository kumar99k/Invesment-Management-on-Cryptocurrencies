<?php 
session_start();
include('includes/header.php'); 
include('../function/authcode1.php'); 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php if(isset($_SESSION['message']))
         {  
           ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Hey!</strong> <?= $_SESSION['message']; ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           <?php
            unset($_SESSION['message']);
         }
        ?>
            <div class="card">
                <div class="card-header">
                    <h4>List &nbsp;Of &nbsp;User</h4>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                   foreach($query_run as $row)
                                   {
                                    ?>
                                  <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['phone'];?></td>
                                    <td><?php
                                        if($row['role_as'] =='1'){
                                        echo'Admin';
                                        }elseif($row['role_as'] =='0'){
                                            echo 'User';
                                        }
                                        ?></td>
                                    <td><a href="edituser.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>
                                    <td>
                                    <form action="" method="POST>
                                    <button type="submit" name="deleteuser" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                  </tr>
                                    <?php
                                   } 
                                }
                                else{
                                ?>
                                    <tr>
                                        <td colspan="6">No record found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                               
                            </tbody>
                        </table>
                      <!--  <div class="row">
                         <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                         </div>
                         <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                         </div>
                         <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                         </div>
                     </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>