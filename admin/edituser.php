<?php include('../config/dbcon.php');?>
<?php include('includes/header.php'); ?>

 <?php
 
if(isset($_POST['updatebtn']))
{
    $user_id = $POST['user_id'];
    $name = $POST['name'];
    $email = $POST['email'];
    $phone = $POST['phone'];
    $password = $POST['password'];
    $role_as = $POST['role_as'];

    $query = "UPDATE users SET name='$name', email='$email', phone='$phone', password='$password', role_as='$role_as'
                WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $_SESSION['message'] = "Updated Successfully";
            header('Location: ../admin/viewuser.php');
            exit(0);
        }
        
       /* else
       {
        $_SESSION['message'] = "Profile is not Updated";
           header('location: ../admin/viewuser.php');
       }*/
    }
?>
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit &nbsp;User</h4>
                </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users ="SELECT * FROM users WHERE id='$user_id' ";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                                ?>

                        <form action="../functions/code.php" method="POST">
                            <input type="hidden" name="$user_id" value="<?= $user['id'];?>"/> 
                            <div class="row">
                                <div class="col-md-12 md-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?= $user['name'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 md-3">
                                    <label for="">Email</label>

                                    <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 md-3">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" value="<?=$user['phone'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 md-3">
                                    <label for="">Password</label>
                                    <input type="text" name="password" value="<?=$user['password'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 md-3">
                                    <label for="">Role</label>
                                    <select name="role_as" required class="form-control">
                                        <option value=""><-- Select Role --></option>
                                        <option value="1"<?=$user['role_as'] == '1' ? 'selected':'' ?> >Admin</option>
                                        <option value="0"<?=$user['role_as'] == '0' ? 'selected':'' ?> >User</option>
                                    </select>
                                </div>
                                <div class="col-md-12 md-3"><br>
                                    <button type="submit" name="updatebtn" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </form>
                       
                        <?PHP
                                }
                            }
                            else{
                                ?>
                                <h4>NO RECORD FOUND</h4>
                                <?php
                            }
                        }
                       ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>