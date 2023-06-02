<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" href="../css/payment.css">
</head>

<body>
	<div class="popup" id="popup">
		<img src="../images/paytm.webp">

	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">

	<p hidden>
		<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">

		<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
							
		<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					
		<input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

	</p>
	
	
    
	<div class="inputGroup">
	       Enter Amount &nbsp;&nbsp;&nbsp;&nbsp;<input title="TXN_AMOUNT" tabindex="10"
						type="number" name="TXN_AMOUNT"
						value="1" style= "background-color: transparent; border-style: solid; border-width: 0px 0px 1px 0px; border-color: darkred;
	                                    outline: 0; height: 30px; width: 80px;">
    </div>
	<a href="#" value="CheckOut" type="submit"	onclick="" class="pay"><button>&nbsp;&nbsp;&nbsp;CheckOut&nbsp;&nbsp;&nbsp;</button></a>
	<BR>
	
	<p align="left" ><a href="../wallet.php" style="color: white;  text-decoration: none;, padding: 2px 0px;" >&nbsp;&nbsp;Cancel&nbsp;&nbsp;</a><p>
</form>
</div>

</body>
</html>