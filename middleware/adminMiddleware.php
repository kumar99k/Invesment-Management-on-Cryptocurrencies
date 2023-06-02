<?php
include('../functions/myfunctions.php');
if(isset($_SESSION['auth']))
{
    if($_SESSION['role_as']!=1)
    {
        redirect("../login.php","Your Not Authorized to access this page");
        /*$_SESSION['message'] = "Your Not Authorized to access this page";
        header('Location: ../login.php');*/
    }
}
else
{
    redirect("../login.php","Login To Continue");
 /*   $_SESSION['message'] = "Login To Continue";
    header('Location: ../login.php');*/
}

?>