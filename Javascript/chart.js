var btc = document.getElementById("cbitcoin");
/*var eth = document.getElementById("ethereum");
var doge = document.getElementById("dogecoin");
var tet = document.getElementById("tether");
var ada = document.getElementById("cardano");
var dai = document.getElementById("dai");
var dot = document.getElementById("polkadot");
var trx = document.getElementById("tron");
var ltc = document.getElementById("litecoin");
var sol = document.getElementById("solana");*/

var settings={
    "async": true,
    "scrossDomain": true,
    "url": "https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=30",
    "method": "GET",
    "headers": {}
}

$.ajax(settings).done(function (response){
    btc.innerHTML = response.bitcoin.usd;
   /* eth.innerHTML = response.ethereum.inr;
    doge.innerHTML = response.dogecoin.inr;
    tet.innerHTML = response.tether.inr;
    ada.innerHTML = response.cardano.inr;
    dai.innerHTML = response.dai.inr;
    dot.innerHTML = response.polkadot.inr;
    trx.innerHTML = response.tron.inr;
    ltc.innerHTML = response.litecoin.inr;
    sol.innerHTML = response.solana.inr;*/
   
}); 