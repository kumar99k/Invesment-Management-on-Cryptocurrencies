<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Investo - Best Investing Platform</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body >
<?php 
session_start();
include_once("nav.php")?> 
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
<br>
<div class="container px-4" >
  <div class="row gx-5" >
   <div class="col" >
      <div class="p-3" >
        <div class="visual" >
          <i class="fa-fa-user"></i>
        </div>
        <div class="details" >
        <img src="./images/th (1).webp" width="100" height="100"></center>
      </div>
      </div>
     </div>

     
     <div class="col" >
      <div class="p-3" >
        <div class="visual" >
          <i class="fa-fa-user"></i>
        </div>
        <div class="details" >
        <img src="./images/th.webp" width="100" height="100"></center>
      </div>
      </div>
     </div>

     
     <div class="col" >
      <div class="p-3" >
        <div class="visual" >
          <i class="fa-fa-user"></i>
        </div>
        <div class="details" >
        <img src="./images/th (2.webp" width="100" height="100"></center>
      </div>
      </div>
     </div>

     <div class="col" >
      <div class="p-3" >
        <div class="visual" >
          <i class="fa-fa-user"></i>
        </div>
        <div class="details" >
        <img src="./images/th (3).webp" width="100" height="100"></center>
      </div>
      </div>
     </div>

     <div class="col" >
      <div class="p-3" >
        <div class="visual" >
          <i class="fa-fa-user"></i>
        </div>
        <div class="details" >
        <img src="./images/th1.webp" width="100" height="100"></center>
      </div>
      </div>
     </div>

  </div>  
</div>
<BR>
<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INVESTMENTS </h4>
<div class="container">
 
 <div class="col-md-12">
 
 <div class="card-body">
<table class="table table-dark" style="border-radius: 9px;
background: linear-gradient(45deg, #7184b4, #879dd6);
box-shadow:  29px -29px 59px #323b50,
             -29px 29px 59px #caebff;" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Coins</th>
      <th scope="col">Invested Value</th>
      <th scope="col">Updated Value</th>
      <th scope="col">Analyze</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bitcoin</td>
      <td>2101957</td>
      <td>2101757</td>
      <td>- ₹200</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>TRON</td>
      <td>2.5</td>
      <td>5.55</td>
      <td>+ ₹3.05</td>
</tr> 
  </tbody>
</table>
</div>
</div>
</div>
<br><br>

  
  </body>
</html>
<?php include_once("footer.php") ?>