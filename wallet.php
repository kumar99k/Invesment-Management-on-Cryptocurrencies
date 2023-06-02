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

<?php 
session_start();
include_once("nav.php")
?>

<body>

<center>
<table class="table table-borderless">
 
  <tbody>
    <tr>
      <td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./images/wallet.jpg" width="500" height="550"></td>
      <td> <BR><div class="btn btn-warning rounded-pill" style="height: 205px;
         width: 75%;
background: linear-gradient(145deg, #e6b800, #ffda00);
box-shadow:  30px 25px 25px #856a00,
             -10px -15px 25px #ffff00;"><br><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallet&nbsp;<span id="wallet" class="badge bg-secondary"> Rs ₹</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
</td>
      
    </tr>
    <tr>
      <td><div><A href="./paytm/TxnTest.php" class="btn btn-success rounded-pill" style="height: 205px;
         width: 75%;
background: linear-gradient(145deg, #44a33c, #50c248);
box-shadow:  30px 25px 25px #275e23,
             -10px -15px 25px #6fff63;"><BR><BR>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amount &nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
  </div></td>
    </tr>
  </tbody>
</table>
</center>

<!--
<CENTER>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
      <div class="btn btn-warning rounded" style="height: 450px;
         width: 65%;
background: linear-gradient(145deg, #e6b800, #ffda00);
box-shadow:  30px 25px 25px #856a00,
             -10px -15px 25px #ffff00;"><BR><BR><BR><BR><BR><BR>&nbsp;Wallet&nbsp;<BR><BR><BR><span id="wallet" class="badge bg-secondary"> Rs ₹</span>&nbsp;</a>
  </div>

    </div>
    <div class="col">
      <div class="btn btn-success rounded" style="height: 450px;
         width: 65%;
background: linear-gradient(145deg, #44a33c, #50c248);
box-shadow:  30px 25px 25px #275e23,
             -10px -15px 25px #6fff63;">
             <div><BR><BR><BR><BR><BR><BR><BR><a href="./paytm/@practiceTxnTest.php" class="btn btn-secondary rounded-pill">
              &nbsp;&nbsp;&nbsp;Add Amount To Your Wallet&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;</a></div>
  </div>
    </div>
  </div>
</div>
</CENTER>
-->


<script>

      var walletAmt=1000;


      function getWalletBalance(params) {
          
          if(localStorage.getItem("Wallet Amt")==null){
              
              localStorage.setItem("Wallet Amt",0);
          }

          return localStorage.getItem("Wallet Amt")

      }

      function addAmount(amt) { 
          var walletBalance=getWalletBalance();
          localStorage.setItem("Wallet Amt",eval(walletBalance+amt));
      }
      document.getElementById("wallet").innerHTML="Rs "+getWalletBalance();


      </script>
</body>

</html>
