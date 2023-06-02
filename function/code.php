<?php
session_start();
include('../config/dbcon.php');
include('../functions/authcode.php');
include('../admin/authen.php');
//include('../middleware/adminMiddleware.php');
if(isset($_POST['deleteuser']))
{
    $user_id = $POST['deleteuser'];

    $query = "DELETE FROM users WHERE id='user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header('Location: ../admin/viewuser.php');
        exit(0);
    }
    else
   {
    $_SESSION['message'] = "Profile is not Deleted";
       header('location: ../admin/viewuser.php');
   }
}

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