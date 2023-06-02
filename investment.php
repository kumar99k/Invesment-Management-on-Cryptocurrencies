<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Investo - Best Investing Platform</title>

        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    

        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
      </head>
<body>
<?php
 session_start();
 include_once("nav.php") ?> 
 


<br>

<div class="container">
 
    <div class="col-md-12">
    
    <div class="card-body">

<table class="table" style="border-radius: 9px;
background: linear-gradient(45deg, #7184b4, #879dd6);
box-shadow:  29px -29px 59px #323b50,
             -29px 29px 59px #caebff;" >
  <thead><h4
  style="border-radius: 75px;
background: linear-gradient(45deg, #7184b4, #879dd6);
box-shadow:  29px -29px 59px #323b50,
             -29px 29px 59px #caebff;
             text-align: center;
             padding: 20px 25px;
             width: 400px;"> NEW INVESTMENTS  </h4><br>
    <tr>
    <th scope="col"> <center>Rank</th>
      <th scope="col"> <center> Crypto Coins</th>
      <th scope="col"><center>Symbol</th>
      <th scope="col"><center>Price</th>
      <th scope="col"><center>Start Investing</center></th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><center>1</th>  
      <td>&nbsp;&nbsp;&nbsp;<img src="./images/cryptos/BTC.webp">&nbsp;Bitcoin</td>
      <td>&nbsp;&nbsp;&nbsp;BTC</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="bitcoin"></span>
    </div></td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>   
      <th scope="row"><center>2</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/ETH.png">&nbsp;Ethereum</td>
      <td>&nbsp;&nbsp;&nbsp;ETH</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="ethereum"></span>
    </div></td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>3</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/USDT.webp">&nbsp;Tether</td>
      <td>&nbsp;&nbsp;&nbsp;USDT</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="tether"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>4</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/DOGE.png">&nbsp;Dogecoin</td>
      <td>&nbsp;&nbsp;&nbsp;DOGE</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="dogecoin"></span>
    </div</td>
    <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>5</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/ADA.png">&nbsp;Cardano</td>
      <td>&nbsp;&nbsp;&nbsp;ADA</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="cardano"></span>
    </div</td>
    <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>

    <th scope="row"><center>6</th>
      <td>&nbsp;&nbsp;&nbsp;<img src="./images/cryptos/DAI.png">&nbsp;Dai</td>
      <td>&nbsp;&nbsp;&nbsp;DAI</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="dai"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>7</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/DOT.png">&nbsp;Polkadot</td>
      <td>&nbsp;&nbsp;&nbsp;DOT</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="polkadot"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>8</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/TRX.png">&nbsp;TRON</td>
      <td>&nbsp;&nbsp;&nbsp;TRX</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="tron"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>9</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/LTC.png">&nbsp;Litecoin</td>
      <td>&nbsp;&nbsp;&nbsp;LTC</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="litecoin"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a></center></td>
    </tr>
    <th scope="row"><center>10</th>
      <td> &nbsp;&nbsp;&nbsp;<img src="./images/cryptos/SOL.png">&nbsp;Solana</td>
      <td>&nbsp;&nbsp;&nbsp;SOL</td>
      <td><div>&nbsp;&nbsp;&nbsp;₹ &nbsp;<span id="solana"></span>
    </div</td>
      <td><center><a href="#" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Trade&nbsp;&nbsp;&nbsp;</a>
</center></td>
    </tr>


  </tbody>
</table>
<!--</div>-->
</div>
 
</div> 
  </div>



<script src="./Javascript/cryprice.js"></script>
<?php include_once("footer.php") ?> 
</body>
</html>