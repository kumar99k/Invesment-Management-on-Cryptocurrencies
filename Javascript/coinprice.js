var btc = document.getElementById("bitcoin");
var eth = document.getElementById("ethereum");
var tet = document.getElementById("tether");
var doge = document.getElementById("dogecoin");
var ada = document.getElementById("cardano");

var settings={
    "async": true,
    "scrossDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=tether%2Cdogecoin%2Ccardano%2Cpolkadot%2Cdai%2Ctron%2Clitecoin%2Csolana&vs_currencies=inr",
    "method": "GET",
    "headers": {}
}
$.ajax(settings).done(function (response){
    btc.innerHTML = response.bitcoin.usd;
    eth.innerHTML = response.ethereum.usd;
    tet.innerHTML = response.tether.usd;
    doge.innerHTML = response.dogecoin.usd;
   ada.innerHTML = response.litecoin.inr;
}); 


/*var btc = document.getElementById("bitcoin");
var eth = document.getElementById("ethereum");
//var tet = document.getElementById("tether");
var doge = document.getElementById("dogecoin");

var settings={
    "async": true,
    "scrossDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Cdogecoin&vs_currencies=usd",
    "method": "GET",
    "headers": {}
}
$.ajax(settings).done(function (response){
   btc.innerHTML = response.bitcoin.usd;
   eth.innerHTML = response.ethereum.usd;
   //tet.innerHTML = response.tether.usd;
   doge.innerHTML = response.dogecoin.usd;
}); 
*/