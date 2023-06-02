
<nav class="container-fluid navbar navbar-expand-lg navbar-dark"  style="background-color: 2d4583;" 
      style="position:sticky;">

    <a class="navbar-brand" href="#"><img src="./images/capital.png"  alt="logo">&nbsp;Investo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa fa-th-large">&nbsp;</i>DASHBOARD</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <li class="nav-item">
          <a class="nav-link active" href="investment.php"><i class="fa fa-btc">&nbsp;</i>INVESTMENT</a>
        </li>  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <li class="nav-item">
          <a class="nav-link active" href="./wallet.php"><i class="fa fa-google-wallet">&nbsp;</i>WALLET</a>
        </li>

      <!--  <li class="nav-item">
          <a class="nav-link active" href="./offlinewallet/index.php"><i class="fa fa-google-wallet">&nbsp;</i>WALLET</a>
        </li>  -->
      
    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <?php
      if(isset($_SESSION['auth']))
      {
        ?>
      
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa fa-user-circle-o">&nbsp;</i>
    <?= $_SESSION['auth_user']['name'];?>
  </a>
    <ul class="dropdown-menu" style="background-color: 2d4583;">
      <li><a class="dropdown-item"  style="color: white;" href="editprofile.php">Profile</a></li>
      <li><a class="dropdown-item"  style="color: white;" href="index.php">Logout</a></li>
    </ul>
  </li>
  <?php
      }
      ?>
          </ul>
        </li>
      </ul> 
    </div>
</nav>