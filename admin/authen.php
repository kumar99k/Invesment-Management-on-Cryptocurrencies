<?php
session_start();
include('../config/dbcon.php');
if(isset($_SESSION['auth']))
{
        $_SESSION['message'] = "Welcome";
        header('Location: ../login.php');
 }
    else
    {
        if($_SESSION['auth_role']!= "1")
        {
                $_SESSION['message'] = "You are not Authorized";
                header('Location: ../login.php');
                exit(0);
         }
      }
?>
