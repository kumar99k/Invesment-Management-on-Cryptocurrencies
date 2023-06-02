var walletAmt=1000;

function getWalletBalance(params) {
    
    if(localStorage.getItem("Wallet Amt")==null){
        
        localStorage.setItem("Wallet Amt",0);

    }

    return localStorage.getItem("")

}

function addAmount(amt) {
    
    var walletBalance=getWalletBalance();
    localStorage.setItem("Wallet Amt",walletBalance+amt);

}
