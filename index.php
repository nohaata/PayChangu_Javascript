<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Integration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background: #cfcffd;
			font-size: 18px;
			font-family: sans-serif;

		}
		h1{
			text-align: center;
		}
		form{
			background: #fff;
			box-shadow: 0 0 36px #555;
			width: 30%;
			margin: 5% auto;
			padding: 35px;
		}
		.input-box{
			display: block;
			width: 96%;
			margin: 5px auto;
			padding: 10px;
			background: #fff;
			border: 1px solid #c0c0c0;
			box-shadow: inset  0 0 2px #777;
		}
		button{
			font-size: 18px;
			padding: 10px 20px;
			margin: auto;
			display: block;
			color: #fff;
			background: #090;
			border: 1px solid #060;
		}
	</style>
</head>
<body>
	<h1>Paychangu Integration with JavaScript</h1>
	<hr>
	
	<form>
	  <script src="https://in.paychangu.com/public/js/payment.js"></script>
	  	<div id="message"></div>
	  	<label>First name</label>
	  	<input type="text" class="input-box" id="fname" name="fname" required>
	  	<label>Last name</label>
	  	<input type="text" class="input-box" id="lname" name="lname" required>
	  	<label>Email</label>
	  	<input type="email" class="input-box" id="email" name="email" required>
	  	<label>Amount</label>
	  	<input type="number" class="input-box" id="amount" name="amount" required>
	  	<br>
	  <button type="button" onClick="makePayment()">Pay Now</button>

  </form>
<script>
    function makePayment(){
    	const fname = document.getElementById('fname').value;
    	const lname = document.getElementById('lname').value;
    	const email = document.getElementById('email').value;
    	const amount = document.getElementById('amount').value;
      PayChanguCheckout({
        "secret_key": "sec-test-yTxzn4EAaU8PLucZCGiUrlHN41pKT14Q",
        "tx_ref": "GS-"+Math.floor((Math.random() * 100000000)+1),
        "amount": amount,
        "currency": "MWK",
        "callback_url": "https://webhook.site/7657863465874",
        "return_url": "https://webhook.site",
        "customer":{
          "email": email,
          "first_name":fname,
          "last_name":lname,
        },
        "customization": {
          "title": "GS Test Payment",
          "description": "Payment Description",
          "logo": "https://assets.piedpiper.com/logo.png"
        },
        "meta": {
          "uuid": "uuid",
          "response": "Response"
        }
      });
    }
    </script>
</body>
</html>