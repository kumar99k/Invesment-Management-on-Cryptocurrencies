<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=site_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" >
    <title><?=$page_title?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2d4583;">
  <div class="container">
      
    <a class="navbar-brand" href="#">
      <img src="../../../../../@btc_project/public_html/images/capital.png" alt="logo">
      Investo
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../../../../@btc_project/public_html/dashboard.php"><i class="fa fa-th-large">&nbsp;</i>DASHBOARD</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <li class="nav-item">
          <a class="nav-link active" href="../../../../../@btc_project/public_html/investment.php"><i class="fa fa-btc">&nbsp;</i>INVESTMENT</a>
        </li>  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <li class="nav-item">
          <a class="nav-link active" href="#"><i class="fa fa-google-wallet">&nbsp;</i>WALLET</a>
        </li>  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



        <?php
      if(isset($_SESSION['auth']))
      {
        ?>
      
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa fa-user-circle-o">&nbsp;</i>
    <?= $_SESSION['userdata']['full_name'];?>
  </a>
    <ul class="dropdown-menu" style="background-color: 2d4583;">
      <li><a class="dropdown-item"  style="color: white;" href="editprofile.php">Profile</a></li>
      <li><a class="dropdown-item"  style="color: white;" href="index.php">Logout</a></li>
    </ul>
  </li>
  <?php
      }
      ?>

        <!--
        <?php
     if(isset($_SESSION['Auth'])){ ?>
      <li class="nav-item">
      <a class="nav-link active" href="assets/php/process.php?logout"><i class="fa fa-sign-out"></i>LOGOUT</a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    }else{
      ?>
      <li class="nav-item">
            <a class="nav-link active" href="?login"><i class="fa fa-sign-in">&nbsp;</i>LOGIN</a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
            <a class="nav-link active" href="?signup"><i class="fa fa-gitlab">&nbsp;</i>SIGNUP</a>
    </li>
      <?php
    }
        ?>
     -->
   </ul>
  </div>
</div>
</nav>
